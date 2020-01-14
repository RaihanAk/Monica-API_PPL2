# API for Monica 2.1 App

## Description

API for Monica 2.1 App using Laravel. It handles :
1. Login user 
2. Create new user
3. Get user data (based on ID or all of 'em)
4. Create new committee

You can test by simply accessing the website using Web Browser of your choice or [Postman](https://www.getpostman.com/).

## Setting Up on Locals

This project was tested using localhost, so as prerequisites you need :
1. XAMPP
2. Apache
3. MySQL

And all the requisites that comes for them.
</br>

After you've cloned this project :
1. Create a file named `.env`. Example [here](https://github.com/laravel/laravel/blob/master/.env.example).
2. Set the connection to MySQL localhost database. Make sure you type correctly for username and password as they're needed for authentication purposes. </br>
`DB_CONNECTION=mysql` </br>
`DB_HOST=localhost` </br>
`DB_PORT=3306` </br>
`DB_DATABASE=monica_db` </br>
`DB_USERNAME=root` </br>
`DB_PASSWORD=`
3. All set. You can start test it on Postman to create user, post to http://localhost/monica-api/public/api/signup.

## About

**Muhammad Raihan Akbar** - 140810160013 - [RaihanAk](https://github.com/RaihanAk) </br>
**Muhammad Rifqy Aulia Akbar** - 140810160055 - [Rifqy7x](https://github.com/Rifqy7x) </br>
**Patricia Joanne** - 140810160065 - [realicejoanne](https://github.com/realicejoanne) </br>

API Project - Proyek Perangkat Lunak II.
