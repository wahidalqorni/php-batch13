<?php

    // panggil dulu filenya

    // file User.php yg ada di folder App
    include __DIR__.'/App/User.php';

    // file User.php yg ada di folder App/Models
    include __DIR__.'/App/Models/User.php';

    // import class yg akan digunakan
    use App\User;
    use App\Models\User as UserModel;

    echo __DIR__;

    var_dump(User::getData());

    print_r(UserModel::getData());

?>