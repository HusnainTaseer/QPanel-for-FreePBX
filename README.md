# QPanel for FreePBX
[QPanel] (https://github.com/roramirez/qpanel) is a wonderful Queue statistics dashboard designed by [Rodrigo Ramírez] (https://github.com/roramirez) which can be integrated with asterisk and Freeswith to get realtime Queue stats. I have integrated this module with FreePBX and create a new module through which you can see this QPanel interface on FreePBX GUI.

# Deployment of QPanel for FreePBX
First you have to configure QPanel on your FreePBX server. I have used port 8081 for Qpanel you can choose as per your requirement. You can configure QPanel by following the QPanel doc [here] (https://github.com/roramirez/qpanel).

After Configuration of Qpanel make sure that you are able to access the QPanel dashboard on your configured URL, in my case its http://192.168.1.20:8081/qpanel. Now open the file page.qpanel.php and change the URL at line 15.

Now create FreePBX module directory in /var/www/html/admin/modules

```
cd /var/www/html/admin/modules
mkdir qpanel
```

Now copy all these files in this direcorty and run the following command:

```
fwconsole moduleadmin install qpanel
```

Once it will be installed enable it then you will see there will be another dropdown menu item "Queue Statistics" under Reoprts section. Just click on it and you will be able to see the qpanel dashboard under FreePBX GUI.
