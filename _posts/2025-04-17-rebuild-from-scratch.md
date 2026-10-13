---
layout: post
title: "Rebuild from scratch"
date: 2025-04-17 00:00:00 +0800
---

{% include image.html src="/assets/images/rebuild-from-scratch/bus_timing_singapore_zhebus_06.jpg" %}

It took me quite a while to finally decide to rebuild the app from scratch—mainly because I wasn’t sure how to proceed. One of the potential roadblocks is with the bus monitoring feature, which is supposed to work like an alarm clock: when a user schedules a day and time, the app should automatically start monitoring the bus. However, based on iOS documentation, apps in a suspended state aren’t allowed to run code in the background. This is the first major limitation I foresee.

From what I understand, one workaround is to run your own server, which can send push notifications to the user’s device without requiring the app to be active. But since this is a hobby project, I have no intention of maintaining a server. That said, many alarm clock apps exist on the App Store, so there might be a viable workaround—I just haven't found it yet.

Even if that issue is resolved, there’s another challenge. Once the scheduled time triggers the monitoring system, the app would also need to check the user’s location to calculate walking distance to the bus stop and detect whether the user is moving towards it. This would help in sending the most accurate notification. But doing all this without user interaction means relying on background location updates—which iOS might limit or shut down due to battery constraints. That’s the second obstacle.

With all these unknowns, and considering my limited foundation in Swift, I decided to keep things simple for now: just focus on displaying bus arrival times. No bells and whistles. Get the core feature working first—then add new functionality step by step.

{% include image.html src="/assets/images/rebuild-from-scratch/bus_timing_singapore_zhebus_09.jpg" caption="The mockup of my “2nd” app" %}
