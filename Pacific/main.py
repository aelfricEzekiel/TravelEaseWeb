import mysql.connector

url = "127.0.0.1";
username = "root";
password = "";
database = "TravelEase"

conn = mysql.connector.connect(
    host = url, 
    user = username, 
    password = password, 
    database = database
);

print("server is connected")