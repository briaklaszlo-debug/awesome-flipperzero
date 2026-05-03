# CLAUDE.md

Guidance for AI assistants working in this repository.

## What this repo is

A curated [Awesome List](https://github.com/sindresorhus/awesome) of Flipper Zero resources — links to firmwares, apps, dumps, animations, hardware, guides, etc. It is **documentation-only**. There is no source code, build system, package manager, test suite, or linter. Tasks here are almost always:

- Adding a new link/resource to a section
- Fixing a broken or outdated link
- Editing FAQ entries or firmware comparison rows
- Restructuring or re-categorizing existing entries

Treat the repo like a content document, not a codebase.

## Files

| File | Purpose |
| --- | --- |
| `README.md` | The main awesome list. The bulk of edits land here. |
| `FAQ.md` | Community FAQ for new Flipper Zero users. |
| `Firmwares.md` | Side-by-side feature comparison of firmware forks. **HTML-heavy** (uses raw `<h2>`, `<ul>`, `<table>`, `<kbd>` tags, not Markdown). |
| `LICENSE` | CC0. |

There is no `.github/`, no CI, and no automated checks. Verify changes by reading the rendered file, not by running tooling.

## README.md conventions

### Protected regions

Two HTML comment markers fence the editable body:

```
<!-- DO NOT MODIFY ABOVE -->   ← line ~108
...editable section content...
<!-- DO NOT MODIFY BELOW -->   ← line ~400
```

The header (logo, badges, "New to Flipper Zero?" table, Table of Contents) and footer (edit/discussion call-to-action) are intentionally fixed. **Do not change content outside these markers** unless the user explicitly asks for it. New section headings require a matching TOC entry inside the `<details>` blocks above the top marker, which lives in the protected header — so adding a brand-new top-level section is a coordinated change, not a drop-in.

### Entry format

Every list item follows this exact shape:

```markdown
- [`Project Name` Short description ending with a period.](https://link.to/repo)
```

- The whole line is a single Markdown link — name and description both sit *inside* the `[...]`.
- The project name is wrapped in backticks.
- The description ends with a period.
- One entry per line, prefixed with `- `.

### Where new entries go

**Append new entries to the end of their section.** This is an explicit convention from commit `323f57e` ("Move new links to end of sections"). Do not alphabetize — chronological order is the norm.

If a resource doesn't fit any existing subsection, prefer adding it under the closest existing one rather than inventing a new subsection. Only create a new subsection when the user asks for it or when several related entries are being added together.

### Section layout

Top-level sections (each anchored by `## Heading`):

1. Databases & Dumps
2. Applications & Plugins
3. Firmwares & Tweaks
4. Graphics & Animations
5. Modules & Cases
6. Off-device & Debugging
7. Notes & References

Each contains italicized subsections like `### *General*`, `### *Sub-GHz*`, `### *NFC/RFID*`, etc. Keep the `*italic*` styling on subsection headings.

Some sections include a right-floated callout `<table align="right">…</table>` (e.g., the "Try official apps" box under Applications & Plugins, the Firmwares comparison link). Leave these in place when editing surrounding entries.

### Known oddities to preserve unless told otherwise

- The `Graphics & Animations → Utilities` subsection is duplicated (lines ~278 and ~284 contain the same three entries). Don't silently dedupe — flag it to the user.
- Some entries are explicitly marked `(outdated)` or `(unmaintained)` in the description; that label is meaningful, keep it.

## FAQ.md conventions

- Top-of-file anchor: `<a id="top" ...>`. Every section heading ends with `[🔝](#top)` — a back-to-top link. Preserve this on any new heading you add.
- Answers are written as Markdown blockquotes (`>` prefix) immediately under a `### Question?` heading. Multi-paragraph answers stack `>` lines, sometimes with `> -` bullets inside.
- Tone is conversational and first-person (the maintainer "djsime1"). Don't rewrite that voice when adding adjacent content.
- The TOC table at the top must be updated if you add a new top-level section.

## Firmwares.md conventions

- Written in **HTML, not Markdown**. Each firmware section is `<h2 id="...">…</h2>` followed by `<ul><li>…</li></ul>`.
- The header carries a "Last updated <date>" string — bump it when the user makes a substantive update.
- Each firmware's heading uses `<kbd><a href="...">org/repo</a></kbd>` for the source-link badge. Match that pattern.

## Commit & PR workflow

- The maintainer batches contributor PRs into a single squashed commit per release, with PR authors as co-authors. Recent commit titles follow the pattern: `Update NN: <theme> Includes PR's #a, #b, #c.`
- Individual contributor commits are typically a one-liner describing the addition (e.g., `Add Bar Code Scanner Emulator (#95)`). When committing on behalf of a contribution, a single short imperative line is appropriate; don't fabricate "Update NN" headers — those are the maintainer's call.
- Per the repo instructions for this branch, develop on `claude/add-claude-documentation-HpJFw` and push there. Do not open a PR unless the user asks.

## What not to do

- Don't add a build script, package.json, link checker, CI workflow, or pre-commit hook. The repo deliberately has none.
- Don't reorder or alphabetize existing entries en masse.
- Don't reflow or "tidy" the protected header/footer of `README.md`.
- Don't convert `Firmwares.md` from HTML to Markdown.
- Don't remove `(outdated)` / `(unmaintained)` annotations on entries.
- Don't add emojis to content unless the surrounding section already uses them (the repo uses a few — 👋 🚫 📥 📱 🔰 📕 🆕 ✨ 🔝 — sparingly and in fixed positions).
