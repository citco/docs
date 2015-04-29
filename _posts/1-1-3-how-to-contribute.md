---
title: How To Contribute
layout: page
---

If you think something is missing in these documentations, please go ahead and add your improvements. But to make sure all team members are aware of what you are going to change and to give them the opportunity to discuss these changes before publishing them, do not directly change anything in gh-pages branch. Instead:  

1. Create a draft branch from **gh-pages** branch (and not any other branch)
2. Apply your changes on this new branch
3. Push this new branch to repository so everyone can these changes and give their opinion
4. After discussing these changes with other team members, if everything is OK and changes are approved, then merge this draft branch to gh-pages branch
5. Delete draft branch from repository

_As a rule of thumb, never commit anything dirctly to **gh-pages** branch_

# Naming convention for new posts

This repository is a Jykill blog and the index page is automatically generated using \_posts directory content. If you need to add new pages, you should add them to \_posts directory, and to make index page generate correctly you should also choose name of post (the **.md** file) correctly.  
Jykill posts should start with a date, followed by file name (**YYYY-MM-DD-FILENAME.md**). The date is used to order generated links to posts in index page. We use this to order this links the way we prefer, and to do so we do not use actual dates for posts, instead **1-1-POSTNUM-POSTNAME.md** is used, so by choosing correct value for **POSTNUM** one can manage the order of links generated on index page.  
Here is an example:  
Assume there are three posts in \_posts directory:
```
1-1-1-about.md
1-1-2-how-to-contribute.md
1-1-3-best-practices.md
```
So the links generated in index page will look something like:  
```
1. About
2. How To Contribute
3. Best Practices
```
Now assume you are going to add another post with title "How To Arrange Posts" and we like to order index page links so that the link to this post is placed after "How To Contribute" and before "Best Practices". To do so, we need to change post file names. We name this new post _1-1-3-how-to-arrange-posts.md_ and also we should rename _1-1-3-best-practices.md_ to _1-1-4-best-practices.md_. By doing so, the links generated in index page will look like:  
```
1. About
2. How To Contribute
3. How To Arrange Posts
4. Best Practices
```
