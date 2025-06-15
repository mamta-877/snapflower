<?php
include "header.php";
?>

<br/>
<div class="row text-center" id="fashion">
<div class="col-md-12">
<h1 class="text-dark">Fashion</h1>
<button class="btn btn-#dbaa84">HOME > Fashion</button>
</div>
</div>

<div class="row" id="block">
<?php
$q="select * from tbblog";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
?>
<div class="col-md-6">

<img src="admin/uploads/<?php echo $row['pic']; ?>" height="60%" width="100%"/>
<br/>
<br/>
<h2><?php echo $row['title']; ?></h2>
<br/>
<p>Post on:<?php echo $row['poston']; ?></p>
<p><?php echo $row['description']; ?></p>      
</div>
<?php } ?>

<hr/>

<div class="row" id="search">
<div class="col-md-6">
<h5>SEARCH</h5>
<br/>
<form>
<input type="text" class="form-control" placeholder="Type here..." required />
</form> 
<br/>
<h5>CATEGORIES</h5>
<nav class="footer2">
<a class="nav-link" href="#">> Photography(8)</a>
<a class="nav-link" href="#">> Fashion(4)</a>
<a class="nav-link" href="#">> Life style(4)</a>
<a class="nav-link" href="#">> Shorts(5)</a>
<a class="nav-link" href="#">> Articles(4)</a>
</nav>
<br/>
<div id="beauty">
<h5>TAGS</h5>
<button class="btn btn-border">Battles</button>
<button class="btn btn-border">Beauty Needs</button>
<button class="btn btn-border">Beauty</button>
<button class="btn btn-border">Commercial</button>
<button class="btn btn-border">Ear Care</button>
<button class="btn btn-border">Electric</button>
<button class="btn btn-border">Health</button>
<button class="btn btn-border">Food</button>
<button class="btn btn-border">Inspiration</button>
<button class="btn btn-border">Models</button>
<button class="btn btn-border">Minimal</button>
<button class="btn btn-border">Offering</button>
<button class="btn btn-border">Simple</button>
<button class="btn btn-border">Skills</button>
</div>
</div>
<div class="col-md-6">
<h5>RECENT POSTS</h5>
<br/>
<hr/>
<div class="row">
<div class="col-md-4 pb-4">
<img src="img30.jpg" width="75%" height="100%"/>
</div>
<div class="col-md-8 p-0">
<p>31 Aug,2022</p>
<a>Travelling Solo Is Awesome</a>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4">
<img src="img3.png" width="75%" height="100%"/>
</div>
<div class="col-md-8 p-0">
<p>31 Aug,2022</p>
<a>A Beautiful Sunday Morning</a>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-4">
<img src="img17.jpg" width="75%" height="100%"/>
</div>
<div class="col-md-8 p-0">
<p>31 Aug,2022</p>
<a>Kitchen Inspired On Japanese</a>
</div>
</div>
<hr/>
</div>
</div>

<hr/>

<?php
include "footer.php";
?>