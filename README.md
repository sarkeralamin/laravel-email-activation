# Laravel Email Activation
How to Email Verification When Registration Complete Using Job Event &amp; Listener in Laravel 5.* Programming

Start Job:

Step 1:

Go to Laravel Project Directory In Terminal and Use Command to Make Auth System in Laravel Default

<pre>
 php artisan make:auth
</pre>

Step 2:

Setting up the Laravel Tables & Update Migration Table -
Open Database/Migration/ …create_users_table

<b>Adding Some Table for Queues</b>
These table will work for queued jobs and failed job. Go Terminal and  run the following Artisan commands:
<pre>
php artisan queue:table
php artisan queue:failed-table
php artisan migrate
</pre>

Project Detail: If you want Successfully Implement Registration System Remember Uploaded Repository and Follow Instruction Bellow - 
Follow Complete Product <a href="http://www.unitechsols.com/how-to-email-verification-when-registration-complete-using-job-event-listener-in-laravel-5-programming/" target="_blank"> Project Detail </a>


