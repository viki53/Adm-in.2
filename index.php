<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Adm'in.2 — Demo</title>
	
	<meta name="viewport" content="initial-scale=1, user-scalable=no">
	<link rel="stylesheet" media="screen" href="css/adm-in-2.min.css" />
</head>
<body>
	<div role="banner" id="topbar">
		<a href="./" id="logo"><span>Adm'in.2</span></a>

		<nav role="navigation" id="quick-links">
			<a href="#0"><span role="tooltip">My profile</span></a>
			<a href="#0"><span role="tooltip">Log out</span></a>
		</nav>
	</div>
	<nav role="navigation" id="sidebar">
		<header id="sidebar-header"><h1>Menu</h1></header>

		<ul role="menu" aria-labelledby="sidebar-header" id="sidebar-content">
			<li class="widget widget-search">
				<h2 class="widget-title">Search</h2>
				<form action="#0" method="get" class="widget-content show" id="sidebar-search-form">
					<input type="search" name="q" value="" placeholder="Search" id="sidebar-search-input">
				</form>
			</li>
			<li role="menuitem" class="menu">
				<h2 class="menu-title"><a href="#0">Blog posts</a></h2>
				<ul role="menu" class="menu-content">
					<li role="menuitem" class="submenu">
						<a href="#0">List <span class="badge badge-warning">1</span></a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Write new</a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Categories <small class="submenu-description">A short description here</small></a>
					</li>
				</ul>
			</li>
			<li role="menuitem" class="menu">
				<h2 class="menu-title"><a href="#0">Medias <span class="badge">2</span></a></h2>
				<ul role="menu" class="menu-content">
					<li role="menuitem" class="submenu">
						<a href="#0">List <span class="badge badge-info">2</span></a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Upload</a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Categories</a>
					</li>
				</ul>
			</li>
			<li role="menuitem" class="menu">
				<h2 class="menu-title"><a href="#0">Users</a></h2>
				<ul role="menu" class="menu-content">
					<li role="menuitem" class="submenu">
						<a href="#0">List <span class="badge badge-success">5</span></a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Premium users</a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Add</a>
					</li>
				</ul>
			</li>
			<li role="menuitem" class="menu">
				<h2 class="menu-title"><a href="#0">Games</a></h2>
				<ul role="menu" class="menu-content" hidden="true" aria-hidden="true">
					<li role="menuitem" class="submenu">
						<a href="#0">List</a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Add</a>
					</li>
				</ul>
			</li>
			<li role="menuitem" class="menu">
				<h2 class="menu-title"><a href="#0">Settings</a></h2>
				<ul role="menu" class="menu-content">
					<li role="menuitem" class="submenu">
						<a href="#0">API <span class="badge badge-error">2</span></a>
					</li>
					<li role="menuitem" class="submenu">
						<a href="#0">Administrators</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	<main role="main" id="main">
		<h1>Adm'in.2 — The demo</h1>

		<div class="row">
			<div class="column-large">
				<section class="card" draggable="true">
					<header class="card-header">
						<h2>Statistics</h2>
					</header>
					<div class="card-content">
						<p class="italic">I can be dragged around!</p>
					</div>
				</section>
			</div>
			<div class="column-small">
				<section class="card">
					<header class="card-header">
						<h2>Online</h2>
					</header>
					<div class="card-content">
						<ol>
							<li>User #1</li>
							<li>User #2</li>
							<li>User #3</li>
							<li>User #4</li>
							<li>User #5</li>
						</ol>
					</div>
				</section>
			</div>
		</div>
		<div class="container">
			<p class="alert-error">Error alert</p>
			<p class="alert-success">Success alert</p>
			<p class="alert-info">Info alert</p>
			<p class="alert-warning">Danger alert</p>
		</div>
		<div class="row">
			<div class="column-tiny">
				<section class="card">
					<header class="card-header">
						<h2>Fast links</h2>
					</header>
					<div class="card-content">
						<ul>
						    <li><a href="#0">User #1</a></li>
						    <li><a href="#0">User #2</a></li>
						    <li><a href="#0">User #3</a></li>
						    <li><a href="#0">User #4</a></li>
						    <li><a href="#0">User #5</a></li>
						</ul>
					</div>
				</section>
			</div>
			<div class="column-big">
				<section class="card">
					<header class="card-header">
						<h2>Quick draft</h2>
					</header>
					<form action="#demo-card-form" method="post" class="card-content" id="demo-card-form">
						<div>
							<label for="demo-form-title" class="full">Title</label>
							<input type="text" name="title" placeholder="A big input" class="input-full input-xl" id="demo-form-title">
						</div>
						<div>
							<label for="demo-form-disabled" class="full">Disabled</label>
							<input type="text" name="disabled" placeholder="You can't write here" disabled class="input-full input-xs" id="demo-form-disabled">
						</div>
						<div>
							<label for="demo-form-textarea" class="full">Content</label>
							<textarea name="content" cols="30" rows="10" placeholder="A normal textarea" class="input-full" id="demo-form-textarea"></textarea>
						</div>
						<div>
							<label for="demo-form-select" class="full">Category</label>
							<select name="category_id" class="input-full input-xs" id="demo-form-select"><?php for($i=1; $i<=5; $i++) {echo '<option value="'.$i.'">Category #'.$i.'</option>'; } ?></select>
						</div>
						<div class="text-right">
							<button type="reset" class="button-error">Cancel</button>
							<button type="button" class="button-xl button-success">Save</button>
						</div>
					</form>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="column-medium">
				<section class="card">
					<header class="card-header">
						<h2>Progress</h2>
					</header>
					<div class="card-content">
						<div>
							<progress class="block" value="70" max="100"></progress>
						</div>
					</div>
				</section>
			</div>
			<div class="column-medium">
				<section class="card">
					<header class="card-header">
						<h2>Others bars</h2>
					</header>
					<div class="card-content">
						<div>
							<label for="demo-input-range" class="full">Range input</label>
							<input type="range" name="custom-range" value="4" min="0" max="10" class="input-full" id="demo-input-range">
							<label for="demo-input-range-disabled" class="full">Disabled range input</label>
							<input type="range" name="custom-range" value="7" min="0" max="10" class="input-full" id="demo-input-range-disabled" disabled>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="container">
			<h2>This next row is in a container</h2>
			<div class="row">
				<div class="column-small">
					<section class="card bg-error">
						<header class="card-header">
							<h2>Custom background</h2>
						</header>
						<div class="card-content">
							<p>Some content</p>
						</div>
					</section>
				</div>
				<div class="column-small">
					<section class="card bg-info">
						<header class="card-header">
							<h2>Custom background</h2>
						</header>
						<div class="card-content">
							<p>Some content</p>
						</div>
					</section>
				</div>
				<div class="column-small">
					<section class="card bg-success">
						<header class="card-header">
							<h2>Custom background</h2>
						</header>
						<div class="card-content">
							<p>Some content</p>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column-small">
				<section class="card">
					<header class="card-header">
						<h2>Custom select</h2>
					</header>
					<div class="card-content">
						<form action="#0" method="get" accept-charset="utf-8">
							<select name="custom-select" class="input-full">
								<option value="1">Option #1</option>
								<option value="2">Option #2</option>
								<option value="3">Option #3</option>
								<option value="4">Option #4</option>
								<option value="5">Option #5</option>
							</select>
						</form>
					</div>
				</section>
			</div>
			<div class="column-small">
				<section class="card">
					<header class="card-header">
						<h2>Custom checkboxes</h2>
					</header>
					<div class="card-content">
						<form action="#0" method="get" accept-charset="utf-8">
							<div>
								<label class="checkbox">
									<input type="checkbox" name="custom-checkboxes[]" value="normal">
									<span>Normal</span>
								</label>
							</div>
							<div>
								<label class="checkbox">
									<input type="checkbox" name="custom-checkboxes[]" value="checked" checked="checked">
									<span>Checked</span>
								</label>
							</div>
							<div>
								<label class="checkbox">
									<input type="checkbox" name="custom-checkboxes[]" value="disabled" disabled>
									<span>Disabled</span>
								</label>
							</div>
						</form>
					</div>
				</section>
			</div>
			<div class="column-small">
				<section class="card">
					<header class="card-header">
						<h2>Custom radio buttons</h2>
					</header>
					<div class="card-content">
						<form action="#0" method="get" accept-charset="utf-8">
							<div>
								<label class="radio">
									<input type="radio" name="custom-radio" value="normal">
									<span>Normal</span>
								</label>
							</div>
							<div>
								<label class="radio">
									<input type="radio" name="custom-radio" value="checked" checked="checked">
									<span>Checked</span>
								</label>
							</div>
							<div>
								<label class="radio">
									<input type="radio" name="custom-radio" value="disabled" disabled>
									<span>Disabled</span>
								</label>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="column-tiny">
				<section class="card">
					<header class="card-header">
						<h2>Modals</h2>
					</header>
					<div class="card-content">
						<p class="italic">No content yet</p>
					</div>
				</section>
			</div>
			<div class="column-medium">
				<section class="card">
					<header class="card-header">
						<h2>Text editor</h2>
					</header>
					<div class="card-content">
						<div contenteditable id="demo-text-editor">
							<p>Some <strong>dummy</strong> editable <em>text</em>.</p>
						</div>
					</div>
				</section>
			</div>
			<div class="column-tiny">
				<section class="card">
					<header class="card-header">
						<h2>Toasts</h2>
					</header>
					<div class="card-content">
						<p><button type="button" class="button-xs button-full" onclick="new Admin2.Toast('I\'m a short toast', Admin2.Toast.DURATION_SHORT);">Short</button></p>

						<p><button type="button" class="button-full" onclick="new Admin2.Toast('I\'m a normal toast');">Medium</button></p>

						<p><button type="button" class="button-xl button-full" onclick="new Admin2.Toast('I\'m a long toast', Admin2.Toast.DURATION_LONG);">Long</button></p>
					</div>
				</section>
			</div>
		</div>
		<div class="container">
			<div class="card">
				<div class="card-content">
					<table class="striped" id="demo-table">
						<caption>Here's a table</caption>
						<thead>
							<tr>
								<th width="10%" class="text-center">
									<input type="checkbox" class="check-all" title="Check all lines" onchange="var check_all=this.checked; [].forEach.call(this.parentNode.parentNode.parentNode.parentNode.tBodies[0].querySelectorAll('input[type=checkbox]'), function(c){ c.checked = check_all;});">
								</th>
								<th width="50%">Title</th>
								<th width="20%">Date</th>
								<th width="20%" class="text-center"><span class="sr-only">Options</span></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$date = new DateTime();

							for($i=0; $i<10; $i++) {
								$date->sub(DateInterval::createFromDateString($i.' days, '.$i.' hours, '.$i.' minutes, '.$i.' seconds'));
								echo '
							<tr>
								<td class="text-center"><input type="checkbox" class="check-all" title="Check all lines"></td>
								<td>Post #'.$i.'</td>
								<td><time datetime="'.$date->format('Y-m-d\TH:i:s').'"><strong>'.$date->format('F dS, Y').'</strong> <span class="sr-only">at</span> <em>'.$date->format('h:i').'</em></time></td>
								<td class="text-center">
									<a href="#0" class="button button-info">Edit</a>
									<a href="#0" class="button button-error">Delete</a>
								</td>
							</tr>';
							}
							?>
						</tbody>
					</table>
					<p class="text-right"><button type="button" onclick="document.getElementById('demo-table').classList.toggle('striped');">Toggle table stripes</button></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column-medium">
				<div class="card">
					<div class="card-header"><h2>Image picker</h2></div>

					<div class="card-content image-picker-container">
						<label class="image-picker">
							<input type="checkbox" name="image_picker[]" value="1" class="image-picker-checkbox">
							<span class="image-picker-img"><img src="http://lorempixel.com/200/150/city" alt="Image" class="fill-w" /></span>
						</label>
						<label class="image-picker">
							<input type="checkbox" name="image_picker[]" value="2" class="image-picker-checkbox">
							<span class="image-picker-img"><img src="http://lorempixel.com/200/150/people" alt="Image" class="fill-w" /></span>
						</label>
						<label class="image-picker">
							<input type="checkbox" name="image_picker[]" value="3" class="image-picker-checkbox">
							<span class="image-picker-img"><img src="http://lorempixel.com/200/150/nature" alt="Image" class="fill-w" /></span>
						</label>
					</div>
				</div>
			</div>
			<div class="column-tiny">
				<div class="card">
					<div class="card-header"><h2>Headings</h2></div>

					<div class="card-content">
						<!-- You should use real h1/h2/h3/h4/h5 tags for accessibility and SEO, but classes provide the same visual result -->
						<div class="h1">I'm a level-1 heading</div>
						<div class="h2">I'm a level-2 heading</div>
						<div class="h3">I'm a level-3 heading</div>
						<div class="h4">I'm a level-4 heading</div>
						<div class="h5">I'm a level-5 heading</div>
					</div>
				</div>
			</div>
			<div class="column-tiny">
				<div class="card">
					<div class="card-header"><h2>Headings with links</h2></div>

					<div class="card-content">
						<h3><a href="#0">I'm a level-3 fully-linked heading</a></h3>
						<h3>I'm a level-3 heading <a href="#0">with a link</a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column-medium">
				<div class="card">
					<div class="card-header"><h2>Tabs</h2></div>

					<article class="card-content tabs-container">
						<nav class="tabs-names">
							<a href="#demo-tab-1">Tab 1</a>
							<a href="#demo-tab-2">Tab 2</a>
							<a href="#demo-tab-3">Tab 3</a>
						</nav>
						<section class="tab-content" id="demo-tab-1">
							<p>Hi! I'm Tab 1<p>
						</section>
						<section class="tab-content" id="demo-tab-2">
							<p>Good day, let me introduce myself, people call me Tab 2.<p>
						</section>
						<section class="tab-content" id="demo-tab-3">
							<p>Howdy! My name is Tab 3.<p>
							<p>I love you, do you love me?<p>
						</section>
					</article>
				</div>
			</div>
			<div class="column-tiny">
				<div class="card">
					<div class="card-header"><h2>Text Editor</h2></div>

					<article class="card-content tabs-container">
						<textarea name="text-editor" id="text-editor-example" cols="30" rows="10" class="input-full text-editor">Some <b>bold text</b> and an <i>italic</i> word</textarea>
					</article>
				</div>
			</div>
			<div class="column-tiny">
				<div class="card">
					<div class="card-header"><h2>Sortable</h2></div>

					<article class="card-content tabs-container">
						<ul class="sortable">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
							<li>Item 4</li>
							<li>Item 5</li>
							<li>Item 6</li>
							<li>Item 7</li>
							<li>Item 8</li>
							<li>Item 9</li>
							<li>Item 10</li>
						</ul>
					</article>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="card">
				<div class="card-header"><h2>Pagination</h2></div>

				<article class="card-content pagination-block">
					<a href="#page=1">⇐</a>
					<a href="#page=4">4</a>
					<a href="#page=5">5</a>
					<strong>6</strong>
					<a href="#page=7">7</a>
					<a href="#page=8">8</a>
					<a href="#page=15">⇒</a>
				</article>
			</div>
		</div>
		<div id="footer">
			<p>Your website name — <?php echo date('Y'); ?> — <a href="https://github.com/comin2/Adm-in.2" target="_blank">View sources on GitHub</a></p>
			<!-- You may not delete the following phrase if you want to respect the license. Translating is allowed if you keep the meaning intact. -->
			<p id="admin2-copyright"><a href="https://github.com/comin2/Adm-in.2" target="_blank">Adm'in.2</a> interface by <a href="http://www.comin2.com" target="_blank">COM'in.2</a></p>
		</div>
	</main>
	<script src="js/adm-in-2.min.js"></script>
</body>
</html>