<?php

/**
 *  This file is responsible for building a testable database
 */

require_once(__DIR__."/../core/helpers.php");  // we do not know for sure from where the file gets loaded. 

$DB->dropDB();
$DB->createDB();


// USER_TYPES
$DB->execute("CREATE TABLE User_types (
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR( 255 ) NOT NULL);");  
$DB->execute("INSERT INTO user_types (name) VALUES ('user'), ('admin')");


// USERS
$DB->execute("CREATE TABLE Users (
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR( 100 ),
    last_name VARCHAR( 100 ),
    email VARCHAR( 255 ),
    password VARCHAR( 128 ),
    user_type_id INT(8), 
    CONSTRAINT `fk_User_profile_User_status`
        FOREIGN KEY (`user_type_id`)
        REFERENCES `user_types` (`id`) );");
$DB->execute("INSERT INTO users (name, last_name, email, password, user_type_id) VALUES 
    ('user', 'Veenstra', 'user@pdfbooks.nl', '".good_hash("lol123")."', '1'),
    ('admin', 'Baans', 'admin@pdfbooks.nl', '".good_hash("lol123")."', '2')");

    
// BLOGS
$DB->execute("CREATE TABLE Blogs(
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR( 255 ) NOT NULL,  
    description TEXT NOT NULL,
    imgurl VARCHAR( 255 ) );");
$DB->execute("INSERT INTO Blogs (title, description, imgurl) VALUES 
    ('Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis.', ' 
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>',
            'http://via.placeholder.com/550x350?text=Tes1'),
    ('Lorem ipsum dolor sit amet consectetur adipisicing elit. dolore voluptatibus maxime perspiciatis.', ' 
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>',
            'http://via.placeholder.com/550x350?text=Tes1'),
    ('Dolore voluptatibus maxime perspiciatis amet consectetur adipisicing elit.', ' 
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates, dolore voluptatibus maxime perspiciatis, exercitationem a distinctio ea modi esse quis labore veritatis quo odio perferendis non consequatur, laborum at. </p>',
            'http://via.placeholder.com/550x350?text=Tes1');");