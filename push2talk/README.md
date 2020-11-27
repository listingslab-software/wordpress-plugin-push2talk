# Push2talk Plugin

## Reaching out with accuracy

> Custom WordPress Progressive Web App Plugin for Push2talk

Website contact forms have always been rubbish. They rely on email which quickly got spammed to death. This was solved for the most part by apps like Facebook Messenger, offering simpler, more personal, and more fun ways of connecting customers with business owners.

There are some very real downsides to running your Customer Service on Social Media, even though it's easy. With modern JavaScript we can use fancy pants events for pretty much everything, but in this case we wanted something more old skool. Like a heart beat. 

Sometimes doing things at the speed of JavaScript isn't good for a user. They are human and they don't measure time in milliseconds. They measure it in seconds, so we do too. The App's heart beats once per second. Clockwork exposes hooks which let us execute actions in a more human timeframe We send a chunk of JSON to our Google Cloud Functions

## Serverless Node backend

The function adds the JSON , which we'll call a ting to our NoSQL Firestore Database. Such operations are async. You can see them happening by the Linear Progress Bar which can be seen when synching is done or check your Network tab.

## Local Symlink Install

Running the unix command `ln` will create a syslink from wherever you clone the repo to your wordpress installation

```

ln -s <path-to-repo> <path-wordpress->/wp-content/themes/listingslab

```

eg:
```
ln -s ~/Desktop/Node/wordpress-pwa/plugins/push2talk ~/Desktop/Node/hostgator-v9/wordpress/wp-content/plugins/
```