<?php


    
$conn_id = mysqli_connect("hal-9000.sch.bme.hu","localheroes","ohthaifeilieroquooshaefoengimu","wadon_localheroes") or die("EZ nem sikerült");


if(mysqli_query($conn_id, "CREATE TABLE events (
  id int(10) UNSIGNED NOT NULL,
  date date NOT NULL,
  title varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  body text COLLATE utf8mb4_unicode_ci NOT NULL,
  img varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci")) {echo "Events done";};

echo mysqli_error($conn_id)."<br />";

if(mysqli_query($conn_id, "CREATE TABLE migrations (
  id int(10) UNSIGNED NOT NULL,
  migration varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci")) {echo "Migrations done";};
echo mysqli_error($conn_id)."<br />";

if(mysqli_query($conn_id, "CREATE TABLE password_resets (
  email varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  token varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci")) {echo "password done";};
echo mysqli_error($conn_id)."<br />";

if(mysqli_query($conn_id, "CREATE TABLE users (
  id int(10) UNSIGNED NOT NULL,
  name varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  password varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci")) {echo "Users done";};
echo mysqli_error($conn_id)."<br />";


if(mysqli_query($conn_id, "CREATE TABLE posts (
  id int(10) UNSIGNED NOT NULL,
  title varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  body text COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci")) {echo "Posts done";};
echo mysqli_error($conn_id)."<br />";
    
if(mysqli_query($conn_id, "ALTER TABLE events
  ADD PRIMARY KEY (id)")) {echo "event_al done";};
echo mysqli_error($conn_id)."<br />";
if(mysqli_query($conn_id, "ALTER TABLE posts
  ADD PRIMARY KEY (id)")) {echo "post_al done";};
echo mysqli_error($conn_id)."<br />";
if(mysqli_query($conn_id, "ALTER TABLE users
  ADD PRIMARY KEY (id)")) {echo "user_al done";};
echo mysqli_error($conn_id)."<br />";
if(mysqli_query($conn_id, "ALTER TABLE migrations
  ADD PRIMARY KEY (id)")) {echo "migration_al done";};
echo mysqli_error($conn_id)."<br />";
if(mysqli_query($conn_id, "ALTER TABLE password_resets
  ADD KEY password_resets_email_index (email)")) {echo "pw_al done";};
echo mysqli_error($conn_id)."<br />";
   
   if(mysqli_query($conn_id, "ALTER TABLE events
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT")) {echo "event_al done";};
echo mysqli_error($conn_id)."<br />";
   if(mysqli_query($conn_id, "ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19")) {echo "migrat_al done";};
echo mysqli_error($conn_id)."<br />";
   if(mysqli_query($conn_id, "ALTER TABLE posts
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT")) {echo "post_al done";};
echo mysqli_error($conn_id)."<br />";
   if(mysqli_query($conn_id, "ALTER TABLE users
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT")) {echo "user_al done";};
echo mysqli_error($conn_id)."<br />";

mysqli_close($conn_id);
?>