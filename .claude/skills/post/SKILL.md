---
name: post
description: Proofread a blog post draft, format it for Jekyll, process its images, then commit and push it to jinhoe.com. Use when the user types /post or asks to publish a post.
---

# Publish a post to jinhoe.com

The user writes a draft, often from their phone, sometimes with images. Turn it into a published Jekyll post.

## Draft format

- Line 1 is the title.
- Line 2 is an optional slug, used only if it matches `^[a-z0-9-]+$`. Otherwise it is part of the body.
- The rest is the body. It may contain image placeholders, links or video URLs in any loose form. Work out what the user means.

## 1. Proofread

- Fix grammar, spelling and awkward English. Keep the user's voice, casual tone and Singlish (e.g. "Wah"). Do not rewrite, add content or change meaning.
- Show the corrected title and body, plus a short list of notable changes.
- **Stop and wait for approval.** Never publish without an explicit OK. Apply any edits the user requests, then show the result again.

## 2. Slug

If no slug is given, generate one from the title:
1. Lowercase.
2. Replace apostrophes (`'` `’` `‘` `` ` ``) and colons with `-`.
3. Remove everything except `a-z`, `0-9`, space and `-`.
4. Replace spaces with `-`, collapse repeated `-`, then trim `-` from both ends.

Example: "Free iPad after 201 days" → `free-ipad-after-201-days`.

## 3. Images

Sources, in order:
1. Files attached in this session. Find them on disk; if an attachment is visible to you but not saved as a file, say so and use source 2.
2. `_inbox/` in the repo root (the user uploads there through GitHub on the web).

If the user mentions an image you cannot find, stop and ask.

For each image:
- Give it a short descriptive kebab-case name ending in `.jpg`, e.g. `apple-watch-leather-strap.jpg`.
- Resize it to at most 1200px wide (keep the aspect ratio, never upscale), apply the EXIF rotation, and save it as JPEG quality 80 to `assets/images/<slug>/<name>.jpg`. Use Pillow (`pip install pillow pillow-heif` for HEIC) or ImageMagick, whichever is available.
- Delete the source from `_inbox/` when it is used.

## 4. Write the post

Path: `_posts/<YYYY-MM-DD>-<slug>.md`. Take the date and time from `TZ=Asia/Singapore date "+%Y-%m-%d %H:%M:%S %z"`, because the sandbox clock is in UTC. Do not overwrite an existing file; ask the user instead.

```
---
layout: post
title: "<title, with \" escaped>"
date: <YYYY-MM-DD HH:MM:SS +0800>
---

<body>
```

Body rules:
- Use straight quotes and apostrophes, not curly ones.
- Image: `{% include image.html src="/assets/images/<slug>/<name>.jpg" caption="<caption>" %}`. Leave out `caption` if there is none. Put each image on its own line.
- YouTube or Vimeo video: `{% include video.html url="<url>" %}` on its own line.
- Links open in a new tab: `[text](url){:target="_blank" rel="noreferrer"}`. Internal links use a path such as `/apple-fitness`.

## 5. Commit and push

```
git add _posts/<file>
git add assets/images/<slug>/   # if the post has images
git add -A _inbox/              # if images came from _inbox/
git commit -m "Post: <title>"
git push origin main
```

Stage only these paths. Push straight to `main`, which deploys through GitHub Pages; do not open a PR. If the push to `main` is rejected, report the error and stop.

Reply with the live URL `https://jinhoe.com/<slug>/` and mention that GitHub Pages takes about a minute to rebuild.
