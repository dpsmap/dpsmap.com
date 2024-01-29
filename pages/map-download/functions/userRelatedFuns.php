<?php

$userExist = function ($username) use ($link, $sanatization) {
    $username = $sanatization($username);
    $query = "SELECT `username` FROM `admin` WHERE `username` = '$username'";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        return true;
    } else {
        return false;
    }
};

$isUserVerified = function ($username) use ($link, $sanatization) {
    $username = $sanatization($username);
    $query =  "SELECT `email_status` FROM `admin` WHERE `username` = '$username'";
    $queryResult = mysqli_query($link, $query);
    $finalizedResult = mysqli_fetch_array($queryResult)['email_status'];
    if ($finalizedResult == 'unverified') {
        return false;
    } else if ($finalizedResult == 'verified') {
        return true;
    }
};

$login = function ($username, $password) use ($link, $sanatization) {
    $username = $sanatization($username);
    $password = md5($sanatization($password));
    $query =  "SELECT * FROM `admin` WHERE `username` = '$username'";
    $queryResult = mysqli_query($link, $query);
    $finalizedResult = mysqli_fetch_array($queryResult);
    return (($finalizedResult['password'] === $password) ? $finalizedResult['user_id'] : false);
};

$getUserData = function ($sessionUserId) use ($link) {
    $user_id = (int)($sessionUserId);
    $query =  "SELECT * FROM `admin` WHERE `user_id` = {$user_id}";
    $queryResult = mysqli_query($link, $query);
    $finalizedResult = mysqli_fetch_array($queryResult);
    return ($finalizedResult);
};

$userRecovery = function ($email) use ($link, $sanatization) {
    $email = $sanatization($email);
    $query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $queryResult = mysqli_query($link, $query);
    $finalizedResult = mysqli_fetch_array($queryResult);
    return ($finalizedResult['email'] === $email) ? $finalizedResult : false;
};

function finalizedLoggedIn($sessionUserId)
{
    if (isset($sessionUserId)) {
        return true;
    } else {
        return false;
    }
}

$listCustomerData = function () use ($link) {

    $query =  "SELECT * FROM `customers`";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) { ?>


            <tr>
                <td class="customer-number"><?php echo $row['customer_no'] ?></td>
                <td class="first-name"><?php echo $row['first_name'] ?></td>
                <td class="last-name"><?php echo $row['last_name'] ?></td>
                <td class='email'><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['reason'] ?></td>
                <td><?php echo $row['where_did_you_learn'] ?></td>
                <td><?php echo $row['download_map'] ?></td>
                <td class="download-date"><?php echo $row['download_date'] ?></td>
                <td><?php echo $row['email_status'] ?></td>
                <td><?php echo $row['merge_status'] ?></td>
                <td>
                    <div>
                        <input type="hidden" value="<?php echo $row['customer_no'] ?>" />
                        <button type="button" class="delete-btn" onclick="deleteCustomer(event)">
                            <span class="icon-container">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </button>
                    </div>
                </td>

            </tr>


        <?php }
    }
};

$listCustomerDataToday = function () use ($link) {
    $currentDate = date('Y-m-d');
    $query =  "SELECT * FROM `customers` WHERE date(`download_date`) = '{$currentDate}' ";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) { ?>


            <tr>
                <td class="customer-number"><?php echo $row['customer_no'] ?></td>
                <td class="first-name"><?php echo $row['first_name'] ?></td>
                <td class="last-name"><?php echo $row['last_name'] ?></td>
                <td class='email'><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['reason'] ?></td>
                <td><?php echo $row['where_did_you_learn'] ?></td>
                <td><?php echo $row['download_map'] ?></td>
                <td class="download-date"><?php echo $row['download_date'] ?></td>
                <td><?php echo $row['email_status'] ?></td>
                <td><?php echo $row['merge_status'] ?></td>
                <td>
                    <div>
                        <input type="hidden" value="<?php echo $row['customer_no'] ?>" />
                        <button type="button" class="delete-btn" onclick="deleteCustomer(event)">
                            <span class="icon-container">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </button>
                    </div>
                </td>

            </tr>


        <?php }
    }
};

$listCustomerDataYesterday = function () use ($link) {
    $currentDate = date('Y-m-d', strtotime('-1 days'));
    $query =  "SELECT * FROM `customers` WHERE date(`download_date`) = '{$currentDate}' ";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) { ?>


            <tr>
                <td class="customer-number"><?php echo $row['customer_no'] ?></td>
                <td class="first-name"><?php echo $row['first_name'] ?></td>
                <td class="last-name"><?php echo $row['last_name'] ?></td>
                <td class='email'><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['reason'] ?></td>
                <td><?php echo $row['where_did_you_learn'] ?></td>
                <td><?php echo $row['download_map'] ?></td>
                <td class="download-date"><?php echo $row['download_date'] ?></td>
                <td><?php echo $row['email_status'] ?></td>
                <td><?php echo $row['merge_status'] ?></td>
                <td>
                    <div>
                        <input type="hidden" value="<?php echo $row['customer_no'] ?>" />
                        <button type="button" class="delete-btn" onclick="deleteCustomer(event)">
                            <span class="icon-container">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </button>
                    </div>
                </td>

            </tr>


<?php }
    }
};
