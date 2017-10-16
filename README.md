<p align="center">
  <img src = "https://res.cloudinary.com/devpost/image/fetch/s--sesR50w_--/c_limit,f_auto,fl_lossy,q_auto,w_900/http://i64.tinypic.com/o881e8.png" />
</p>


# Echo
Ever lost your phone and couldn't track it down because that other “FindMyPhone” app works only on wifi/data? Did someone steal it and turn off the wifi/ remove the SIM card and thought they got away?

Well, not anymore! Echo is an app that makes sure your phone and your data is YOUR phone and YOUR data.

# What It Does
Echo allows you to set-up certain “triggers” on your phone so that the phone knows when it isn’t in a good spot. A few examples of these triggers could be:

When your phone isn’t connected to your home WiFi for more than 5 hours.
When your phone is outside the University campus for more than 2 hours.
Now, that the phone knows it’s a bad spot, it automatically sets up a WiFi Hotspot with a certain Unique ID. Example : ECHO$12921

Now, as other Echo users walk by, their phone’s periodically scan for other phones in potential danger. The instant their phone picks up a lost phone’s hotshot, it sends off the GPS data of the phone to a server hosted on Linode (an incredibly fast and stable cloud host that I absolutely love.)

You could also log in to the web-portal and see real-time stats about your phone such as location with timestamps. All without being directly connected to your phone in any way.

# How I Built It
Front-End: HTML, CSS, Javascript, PhoneGap Back-End: PHP, Apache, Linux, Linode

# Challenges I Ran Into
The biggest problem I faced was getting the back-end set up and running as I didn't have any experience in that area. Fortunately, with so many resources such as mentors and the Internet, I picked it up and got everything running pretty fast!

# Accomplishments I'm Proud Of
I'm proud of the fact that despite the fact that I came into the hackathon not knowing much about back-end, I made such huge progress in such a short amount of time, learning all the various languages and APIs available for back-end programming.

# What I Learned
It doesn't matter how much you know about programming, all that matters is the passion and tenacity to be driven to keep learning no matter how daunting the challenge may seem!

You don't have to be afraid to ask others for help! We owe a lot to the friendliness and patience of the mentors and fellow coders for teaching us a thing or two about back-end!

USE VERSION CONTROL! As I was new to working on large projects, I used absolutely no version control(does CTRL+Z count?). This caused me to run into mutliple problems as I went through the project.

Lastly, I learnt that we never know how much we’re truly capable until we push ourselves and this hackathon did exactly that.

# What's Next For Echo
Introduce proximity/strength of WiFi signals to give a more accurate approximation of the location of the phone

Implement timestamps to provide an extra dimensional variable which will be really useful for moving (stolen) phones

Introduce command flushing to all the phones in a certain radius, so the user of the lost phone can set up commands to be sent to his 
phone on the website. The next time his phone would come near another phone with the app, they would automatically connect and the user's instructions would be run. (For example : Wipe all data, Record Audio)

