# Publishing Workflow: How to Add a New Post

Follow these steps to write and publish a new post on your Jekyll site.

## 1. Create the Post File
Create a new Markdown file in the `_posts/` directory. 
**Filename Pattern:** `YYYY-MM-DD-slug.md`
**Example:** `_posts/2026-04-04-my-new-post.md`

## 2. Add the Front Matter
Every post **must** start with this block of YAML at the very top:

```yaml
---
layout: post
title: "Your Post Title"
---
```

## 3. Adding Media (Images & Video)

### Images
1. Create a folder: `assets/images/your-post-slug/`
2. Add your image files there.
3. Use this tag in your Markdown:
   `{% include image.html src="/assets/images/your-post-slug/photo.jpg" caption="Your caption here" %}`

### Videos
Use this tag for YouTube or Vimeo URLs:
`{% include video.html url="https://vimeo.com/your-video-id" %}`

---

## 4. Preview Locally
Run this in your terminal to check for errors and see the design:
```bash
bundle exec jekyll serve
```
Then open: [http://127.0.0.1:4000/](http://127.0.0.1:4000/)

## 5. Publish to GitHub
When ready, run these commands:

```bash
git add .
git commit -m "Add new post: [Your Title]"
git push
```

Your site will automatically build and update on GitHub Pages.
