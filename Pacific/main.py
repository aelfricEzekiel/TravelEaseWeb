from flask import Flask, render_template
import mysql.connector
url = "127.0.0.1"
username = "root"
password = ""
database = "TravelEase"

app = Flask(__name__)

@app.route('/') #decorator
def index():
    return render_template("index.php")

def db():
    conn = mysql.connector.connect(
        host = url, 
        user = username, 
        password = password, 
        database = database
    )
    print("Server is connected")

if __name__ == "__main__":
    app.run(debug=True)
    db()