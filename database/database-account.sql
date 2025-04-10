-- Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS waph_team;

-- Optional: Drop the user if it already exists (use with caution)
DROP USER IF EXISTS 'WAPHTEAM1'@'localhost';

-- Create a user and define the password
CREATE USER 'WAPHTEAM1'@'localhost' IDENTIFIED BY 'teamproject';

-- Grant all privileges on the database to the user
GRANT ALL PRIVILEGES ON waph_team.* TO 'WAPHTEAM1'@'localhost';

-- Apply changes immediately
FLUSH PRIVILEGES;
