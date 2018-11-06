##HOW TO USE MULTIPLE AUTHENTICATION GUARDS IN A LARAVEL APP

You will need PHP 7+, Laravel 5.6+, Composer and Laravel installer. Some knowledge of PHP and Laravel will be helpful.
If you have used Laravel for a while, you should have heard a lot about multiple authentications. You should have also heard “guards” a whole lot. But if you are fairly new to Laravel, multiple authentications makes it possible for you to have different classes of users access different/similar parts of the same application.

There are many reasons why you may want to use multiple authentications in your Laravel application. For example, you have a large application that runs an entire company. Customers also interact with the product and services of the company through the same application. The application also has a blog and there is a department in the company responsible for handling the blog.

We can see from the application above that there are already three sets of users. For customers, we can have them use a certain authentication process to access the system. For writers, they could have a totally different authentication process and even have roles to enable a more robust content management process. For the rest of the company, you can have different roles representing different functions.

Now, let us look at how to create multiple authentications for our different class of users.

https://pusher.com/tutorials/multiple-authentication-guards-laravel