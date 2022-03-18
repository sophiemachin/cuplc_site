Maybe you're the new webmaster or something.

First, create a srcf account (https://www.srcf.ucam.org/)

Now, ask the previous webmaster to make you an admin (they should get the email if you send it to "cuplc-webmaster@srcf.net")

Basics FAQ (login, upload): http://www.srcf.net/faq/basics
(also can read other FAQs and stuff obviously)

On Unix stuff, you can do this all easily via terminal (sry if you use winduhws m8):
  LOGIN, VIEW AND EDIT SMALL STUFF
    login: 
      ssh <name>@shell.srcf.net
    to go to cuplc section: (possible after you've been added as an admin) 
      cd cuplc/public_html
    to view files do:
      ls -l
    to edit files do:
      vim <filename>
    google how to use vim, press i and it becomes almost a normal editor if you can't handle it.
    To delete the whole site (CAREFUL M8):
      cd ..
        (you should now be in ~/cuplc directory
        Before doing next step, pls make sure you backed it up somewhere
      rm -r public_html
    
  UP/DOWNLOAD STUFF
    to download whole site to ~/Documents/CUPLC/download:
      scp -r <user>@shell.srcf.net:~/cuplc/public_html ~/Documents/CUPLC/download
    to upload all of ~/Documents/CUPLC/new: (which should have a subdirectory, public_html, containing the website)
        (before doing this, make sure you deleted all the hidden/temporary/backup files in the directory created by your text edit, for clenliness)
      scp -r ~/Documents/new/public_html <user>@shell.srcf.net:~/cuplc
    to upload a specific file: (from CUPLC/new/public_html)
      scp -r ~/Documents/CUPLC/new/public_html/<filename> <user>@shell.srcf.net:~/cuplc/public_html
      
    After uploading stuff, run 
      srcf-soc-permfix cuplc
    (I think) this fixes permissions, so future webmasters will be able to edit the files without having to go email a sysadmin
  
  CLUB EMAIL STUFF
    FAQ section: http://www.srcf.net/faq/socmail
    Login and go to CUPLC
      ssh <name>@shell.srcf.net
      cd cuplc
    Edit autoforward file
      vim autoforward
    Now modify it with correct formatting, eg
      webmaster:user-1@cam.ac.uk,user2@example.org
    This means emails to "cuplc-webmaster@srcf.net" will be forwarded to "user-1@cam.ac.uk" and "user2@example.org" (can add more, or less. You should probably add yourself if you're the new webmaster...)
    Once done with this, run
      srcf-autoforward cuplc
    This sets up a .forward file with the right formatting for you. 
    Now you're done.
