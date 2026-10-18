---
layout: post
title: "Claude cloud session"
date: 2026-10-16 20:35:44 +0800
---

Two days ago, I tested a [new workflow](/a-post-from-claude-app): getting Claude to upload a post to my website. It worked flawlessly, as expected.

And yes, I'm writing this post on the MRT and will get Claude to upload it once I'm done.

To give you more context, let me explain my previous workflow.

I would draft the post in iA Writer, on either the mobile or desktop app. The thing is, when I needed to insert a link or image, I had to write it in a special way so the script would recognise it. Example: `@image(file.jpg "caption")`

Once I was done writing, I would normally copy and paste it into an AI for grammar correction, and maybe even a rewrite if I had just scribbled the whole post. Sometimes I'd just leave it as is.

At this point, I could only use my MacBook to proceed.

Say the post contained an image. I would drop the image into a destination folder, using the same file name mentioned in the post. Then I'd go to the iA Writer cloud folder where I saved my post, right-click the file, and run a Shortcut action I created in macOS that moves the file to a destination folder in the same directory as the image folder.

I also set up an automation trigger that runs a script whenever a file is dropped into that folder.

The script does several things. It converts the image to JPG, compresses it and resizes it. This step is important because my website is hosted for free on GitHub with a 1GB size limit, so I need to squeeze out every single byte I can. The script also makes some changes to the post so it displays properly on the website, and performs a few other minor tasks. Lastly, it commits (uploads) the files to my GitHub repository. Once that's done, the post is live on my website.

So how did I set up [Claude Code in the cloud](https://youtu.be/-OH1y7CjIew?si=Jr9mHtL294amgkzE){:target="_blank" rel="noreferrer"}?

I explained my workflow to Claude and asked it to understand my script. Then I asked if it could create a workflow that uses the Claude app to publish a post.

At first, it tried to find a way to run my script. I told it there was no need to run the script, just convert the tasks into instruction prompts. Then it suggested using a SKILL instead. Way better. So it helped me create the SKILL and guided me step by step.

Now, to publish a post, I just open the Claude app on my phone and type /post on the first line, followed by the post title, then the main text. If I need an image, I just attach it in the app.

Once I send it, Claude corrects my grammar without changing my writing style. When I'm happy with the final copy, it publishes the post for me. Just like a personal assistant. So good, right?

With less friction now, I hope it'll encourage me to write more often.
