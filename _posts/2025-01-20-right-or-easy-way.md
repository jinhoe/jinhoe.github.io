---
layout: post
title: "Right or easy way"
---

When working on client project, a lot of decisions need to be made on based on the client’s best interest. Or at least that’s my first priority. However it is a fine line between working the right way or the easy way given the tight timeline.

Recent I came across an issue where I need to automate deployment of a Kubernetes cluster. However there are multiple compute resources to choose from.

The easy way would be to create a dropdown list of the available  resources and let the user decide. Case closed, right?

But my principle in true automation has always been automate with no human intervention. So the easy way doesn’t sit well with me.

I think deeper. If I am the user, how will I decide which resources to choose? I would go into vCenter, and look at all the resources available cpu, memory and storage. I will choose the one with the most available resources.

It is not hard to script out a logic for that, just need more time. Yes, the right way often requires more time.

Very often due to the tight timeline, working the easy way is very tempting. But no, not under my watch.
