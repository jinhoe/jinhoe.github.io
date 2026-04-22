# jinhoe.com

## 1. About this site

This is the personal website and blog of Jinhoe, built with Jekyll and hosted on GitHub Pages. It was recently migrated from a Kirby-based static site to a standard Jekyll structure for simplicity, performance, and easier publishing workflows.

---

## 2. Manual Posting Workflow

### Create Post

Create a new Markdown file in the `_posts/` directory. 
**Filename Pattern:** `YYYY-MM-DD-slug.md` (e.g., `_posts/2026-04-04-my-new-post.md`)

#### Add the Front Matter
Every post **must** start with this block of YAML at the very top:

```yaml
---
layout: post
title: "Your Post Title"
---
```

#### Add Link
Use standard Markdown syntax for adding links. To ensure a link opens in a new tab securely, you can use the target attribute syntax:

```markdown
[Link Text](https://example.com){:target="_blank" rel="noreferrer"}
```

#### Add Media
1. Create a folder for your post's images: `assets/images/your-post-slug/`
2. Add your image files to that folder.
3. Use the following include tag in your Markdown file:

```liquid
{% include image.html src="/assets/images/your-post-slug/photo.jpg" caption="Your caption here" %}
```

> **Note:** Ensure you use standard straight quotes (`"`) inside Liquid tags, as Jekyll does not parse curly/smart quotes (`“ ”`).

#### Share Video Link
Use this include tag for embedding YouTube or Vimeo URLs:

```liquid
{% include video.html url="https://vimeo.com/your-video-id" %}
```

### Delete Post

If you need to completely remove a post:
1. **Delete the Post File:** Locate and delete the `.md` file from the `_posts/` directory.
2. **Clean Up Media:** Delete its corresponding media folder in `assets/images/your-post-slug/` to free up space.

### Preview Locally

Run this in your terminal to check for errors and see the design:
```bash
bundle exec jekyll serve
```
Then open: <http://127.0.0.1:4000/>

### Publish to GitHub

When ready, commit and push your changes to GitHub. Your site will automatically build and update on GitHub Pages.

```bash
git add .
git commit -m "Add new post: [Your Title]"
git push
```

---

## 3. Automation Posting Workflow

### Create Post

You can automate the post creation process (including formatting, folder management, and image optimizations) using the configured macOS Folder Action.

**Steps to Auto-Publish:**

1. **Write the Post:** Create a basic Markdown file anywhere on your computer.
   - **First Line:** Must be the Post Title (this line will be extracted and converted to your front matter and URL slug).
   - **Second Line (Optional):** To override the auto-generated slug, put a custom slug here using only lowercase letters, numbers, and hyphens (e.g. `new-obsidian-vault`). Useful when the title contains Chinese characters or when you want a specific URL. If present, this line is consumed by the script and will not appear in the post body.
   - **Body:** Write your content normally below the title (or slug line). Use the **shorthand syntax** below for links, images, and videos.
2. **Add Images (Optional):** 
   - Place your raw, high-resolution source images into the `publish/step_1_image/` folder.
   - In your Markdown, reference them using the `@image` shorthand (see below).
3. **Trigger the Automation:** Drop the completed Markdown file into the `publish/step_2_post/` folder.

#### Shorthand Syntax

Instead of typing verbose Liquid/Kramdown markup, use these shorthands — the publish script converts them automatically:

| What you type | What it becomes |
|---|---|
| `@[Text](url)` | `[Text](url){:target="_blank" rel="noreferrer"}` |
| `@image(file.jpg)` | `{% include image.html src="/assets/images/slug/file.jpg" %}` |
| `@image(file.jpg "caption")` | `{% include image.html src="/assets/images/slug/file.jpg" caption="caption" %}` |
| `@video(url)` | `{% include video.html url="url" %}` |

**Example draft post (auto-generated slug):**
```markdown
My First Post

Check out @[this blog](https://example.com) for more info.
```

**Example draft post (custom slug — useful for Chinese titles or specific URLs):**
```markdown
我的第一篇文章
my-first-post

Check out @[this blog](https://example.com) for more info.
```

**What the Automation Does:**
1. Generates a URL-safe slug from the title block.
2. Replaces smart quotes in the body with standard quotes (to prevent Liquid parsing errors).
3. Injects the requisite Jekyll Front Matter.
4. Locates your images in `step_1_image`, downscales them to a max width of 1200px, converts them to compressed JPEGs (80% quality), and moves them to `assets/images/<generated-slug>/`.
5. Replaces the placeholder `slug` text in your image tags to point to the real path.
6. Renames your post to the `YYYY-MM-DD-slug.md` format and moves it into `_posts/`.
7. Deletes the original source files remaining in the `publish` directory.
8. Sends you a macOS notification when finished!
