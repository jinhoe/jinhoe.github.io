---
layout: post
title: "SiteGround replacement"
---

[SiteGround](https://www.siteground.com){:target="_blank" rel="noreferrer"} is an excellent web hosting company. However I do not want to pay US$ 30/mo for hosting a simple website that has no monetization purpose. So the search began.

Initially, I’m tempted to use [DigitalOcean](https://www.digitalocean.com){:target="_blank" rel="noreferrer"} (US$ 4-6/mo) as it gives me full control of a virtual machine. And I can use it to run automation script. However with my limited network knowledge I can’t get it to run [Kirby](https://getkirby.com){:target="_blank" rel="noreferrer"} after multiple attempts. I continue to look further.

[blot.im](https://blot.im){:target="_blank" rel="noreferrer"} (US$ 5/mo) is a file-based CMS like Kirby. Looks easy to use. And since all posts are in txt format I can easily switch to other platform in future.

[micro.blog](https://micro.blog){:target="_blank" rel="noreferrer"} (US$ 5/mo) is recommended by bloggers. It is like a mini social media platform. Comes with a mobile app which is a plus as I always wanted to write and publish post on the go. Unfortunately the UX on the mobile app and browser is not great.

[Cloudways](https://www.cloudways.com){:target="_blank" rel="noreferrer"} (US$ 11/mo) is a web hosting provider by DigitalOcean. The reviews are fine, no red flag. But I didn't get the chance to try this because I've found an even better option.

As I was doing my research, I chance upon this [post](https://forum.getkirby.com/t/full-hosting-on-github-pages-automatic-static-build-via-actions/27094/1){:target="_blank" rel="noreferrer"} which is like seeing the light at the end of the tunnel.

[GitHub Pages](https://pages.github.com){:target="_blank" rel="noreferrer"} (US$ 0/mo) is a free static hosting service provided by GitHub. Oh I love you so much Microsoft!

If you know me, I'll work very hard for free stuff! Haha... I'll leopard crawl though any obstacles to make it work. I was very motivated to work on it and here's the immediately steps in my mind:

1. Get [Kirby Starter kit](https://getkirby.com/try){:target="_blank" rel="noreferrer"} to work
2. Get [Manu's theme](https://manuelmoreale.com){:target="_blank" rel="noreferrer"} to work
3. Migrate my existing website to Github Pages
4. Automate the process of updating the site
5. Configure custom domain

I am done with step 4. Next, I'll "play" with the site for awhile to make sure things are working as usual before going to step 5.

One thing to note that GitHub Pages has a 1 GB limit, hence more suitable for lightweight website. I suppose at some point I will have to move house again.

Finally I planned to create a tutorial on how to host Kirby website on GitHub Pages. Hope that'll happen soon.
