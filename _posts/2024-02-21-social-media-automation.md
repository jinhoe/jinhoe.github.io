---
layout: post
title: "Social media automation"
---

{% include image.html src="/assets/images/social-media-automation/social-media-automation-5.jpeg" caption="My social media automation flowchart" %}

This social media automation likely facilitated my transition into a DevOps Engineer role. During the interview, the interviewer expressed curiosity about how I automated social media for my real estate business.

I briefly outlined the workflow with pride, explaining that in the real estate industry, agents often operate solo, handling everything from marketing to conducting viewings, negotiations, and closing deals. Due to the time-consuming nature of these tasks, agents often struggle to maintain active social media profiles, potentially giving clients the impression that they are inactive or out of business.

Thus, I sought to develop a system that would allow me to curate posts and publish it across various social media platforms. I selected Facebook as the content curation platform due to its user-friendly mobile app

### How it works

I established a private Facebook Page to serve as the central platform for aggregating content from multiple sources for curation. Content sources included RSS feeds and URLs from Facebook Pages relevant to my personal interests or business.

Every day at 8:00 a.m., the system retrieves new content from these sources and publishes them to my private Facebook Page for curation, aligning with my typical start time.

Upon reviewing the posts on my mobile device, I react to each post to indicate its destination:

- Like: Publish to personal channel
- Love: Publish to business channel
- Haha: Publish to both channels

If I wish to add a message to a post, I simply comment on the curated post within my private Facebook Page.

By 11:59 p.m. each day, all curated posts are retrieved and stored in a Google Sheet queue list for drip marketing purposes.

The following day at 8:00 a.m., one of the curated posts from the queue list is published to the respective social media channels.

To automate these processes, I utilized Integromat (now rebranded as [Make](https://make.com){:target="_blank" rel="noreferrer"}) to integrate all components seamlessly.

***

It turns out that the interviewer is now my manager. I suppose he recognized my essential skill set for creating CI/CD pipelines. Good eye, boss! Haha! ;)
