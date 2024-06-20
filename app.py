#!C:\Users\CM\AppData\Local\Microsoft\WindowsApps\python.exe
import mysql.connector
print("Content-Type: text/html\n")
conn = mysql.connector.connect(host='localhost',port='3306',database='cmidle',user='root',password='')

#!/usr/bin/env python

import cgi
import cgitb
import requests
from PIL import Image
import io
import base64

# Enable debugging
cgitb.enable()

API_URL = "https://api-inference.huggingface.co/models/runwayml/stable-diffusion-v1-5"
headers = {"Authorization": "Bearer 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"}

# Print the HTML header


# Get form input
form = cgi.FieldStorage()
text_input = form.getvalue('text_input')

if text_input:
    # Query the API
    response = requests.post(API_URL, headers=headers, json={"inputs": text_input})
    image_bytes = response.content

    # Encode the image bytes to base64
    image_base64 = base64.b64encode(image_bytes).decode()

    # Print the HTML containing the image
    print("<html>")
    print("<body>")
    
    print("<img src='data:image/jpeg;base64," + image_base64 + "' />")
    print("</body>")
    print("</html>")
