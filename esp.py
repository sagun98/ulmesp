'''

    
#os.system("sudo apt-get install ncftpput")

'''


import os 
import fnmatch
import datetime
import os.path, time

#now = datetime.datetime.now()


#print ("last modified: %s" % time.ctime(os.path.getmtime("/home/sagun/Desktop/")))
#print ("created: %s" % time.ctime(os.path.getctime("/home/sagun/Desktop/text")))


i=0
def execute():
    global i
    i=i+1
    onlyfiles = next(os.walk("/home/sagun/Desktop/uploads"))[2]
    for values in  onlyfiles:
        n=os.path.join("/home/sagun/Desktop/uploads",values)
        yen="last modified: %s" % time.ctime(os.path.getmtime(n))
    number_of_files= (len(onlyfiles))
    os.system("ncftpput -u 2217188 -p states123 f8-preview.biz.nf /ulmesp.co.nf/uploads ~/Desktop/uploads/*")
    print(str(i) +" minute passed")
    file = open("/home/sagun/Desktop/uploads/index.php",'r')
    x=""
    y='}?>\n </body> \n </html>'
    count=0
    for values in file:
        x=x+values
        count+=1
        if(count==22):
            break

    x=x+'echo "'+str(yen)+'";'+"\n"+y
    file.close()

    superkek= open("/home/sagun/Desktop/uploads/index.php",'w')
    superkek.write(x)
    superkek.close()
    
    time.sleep(2)

while True:
    execute()
