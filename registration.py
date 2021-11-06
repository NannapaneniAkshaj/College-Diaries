print("Content-Type:text/html")
print()
import cgi
form=cgi.FieldStorage()
email=form.getvalue("email")
user=form.getvalue("user")
password=form.getvalue("password")

import mysql.connector

con=mysql.connector.connect(user="root", password="", host="localhost:3000", database="cd")


cur=con.cursor()
cur.execute("select * from userl where email="+email)
con.commit()


#data=cur.fetchone()
count =cur.rowcount
if(count==1):
    print("Location: signup.php")
    print("Aldready Registered!!!!!")
else:
    cur.execute("insert into userl (email,name,password) values (email,user,password)")
    con.commit()
    print("Location: login.php")


cur.close()
con.close()
