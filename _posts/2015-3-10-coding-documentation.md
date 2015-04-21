---
title: CIT Coding Documentation
layout: page
---
**CIT Coding Documentation**

This document explains the best practices when writing code for any project in CIT. please note that all of the code samples are written based on Laravel php framework because that's what we use for most of the projects in CIT, but they are applicable on any other framework too.

**1. GET\POST response type**

Only return a 200 response when a url is called by GET method, if the request method is anything other than GET (POST, PUT, etc.) the response should be redirect to a GET url. the only exception is when the request is ajax or require Json response.

Right:

{% highlight php %}
<?php

if (Request::isMethod('POST'))
{
	//data validation, manipulation, etc.

	Session::flash('some message');

	return Redirect::to('the/get/url');
}
{% endhighlight %}

Wrong:

{% highlight php %}
<?php

if (Request::isMethod('POST'))
{
	//data validation, manipulation, etc.

	return View::make('some.view');
}
{% endhighlight %}

**2. User Alerts**

You can show messages\alerts to users in 2 different ways:

1.Use session flash for simple messages like a successful message:

{% highlight php %}
<?php

Session::flash('success', trans('messages.form.valid.success'));

Session::flash('error', trans('message.form.invalid.error'));
{% endhighlight %}

As an standard use 'success' and 'error' keys for the messages.

2.Return errors with the response:

{% highlight php %}
<?php

if ($validation->fails())
{
	return Redirect::to('url')->withErrors($validation->errors);
}
{% endhighlight %}

Use the above method only if you're using the laravel's form helper.

Please note that **Never** return the alerts using the view data:

{% highlight php %}
<?php

return View::make('some.view')->with('message', trans('some.message'));
{% endhighlight %}

**3. Where to store messages, labels, etc.**

**Never** hardcode user related messages, labels, titles, etc. into the code, except use localization facilities that the framework (Laravel) provides. we have different kind of user related, human readable data that can be stored in different files: messages, labels, titles, validations.

Right:

{% highlight php %}
<?php

Session::flash('success', trans('message.some'));
{% endhighlight %}

Wrong:

{% highlight php %}
<?php

Session::flash('success', 'Some message for the user!');
{% endhighlight %}

**3. Redirect::back is evil!**

Use Redirect back only if you're sure the HTTP_REFERRER header is valid!

{% highlight php %}
<?php

if (URL::previous())
{
	return Redirect::back()

	//or better:
	return Redirect::to(URL::previous());
}
else
{
	Redirect::to('url');
}
{% endhighlight %}

**4. Name property in submit button**

Using `name="something"` in a submit button will make bugs when using javascript to disable the button on submit.

So do not write html code like this:

```
<button type="submit" name="action" value="remove">submit</button>
```
