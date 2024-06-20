#!C:\Users\CM\AppData\Local\Microsoft\WindowsApps\python.exe
import mysql.connector
print("content-Type:text/html\n")
conn = mysql.connector.connect(host='localhost',port='3306',database='cmidle',user='root',password='')

#!/usr/bin/env python

import cgi
import cgitb
import os
from gtts import gTTS

# Enable CGI error reporting
cgitb.enable()


# Parse form data
form = cgi.FieldStorage()

# Retrieve form data
text = form.getvalue('text')
language = form.getvalue('language')

# Generate audio
def text_to_audio(text, language):
    tts = gTTS(text=text, lang=language, slow=False)
    return tts

# Save audio to file
def save_audio_to_file(audio, filename):
    audio.save(filename)

if text and language:
    # Generate audio
    audio = text_to_audio(text, language)
    audio_filename = 'output.mp3'
    save_audio_to_file(audio, audio_filename)

    # Print audio file link
    print("<div style='text-align: center;font-size:50px;'>")
    print(f"<p>Audio generated successfully.<br/> <a href='{audio_filename}'>Download</a></p>")
    print("</div>")
else:
    # If text or language is not provided
    print("<p>Please provide text and language.</p>")

