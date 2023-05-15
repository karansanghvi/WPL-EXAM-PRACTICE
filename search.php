<form method="post" action="open_read.php" style="text-align:center; margin:0">
        <input class="form-control search w-75" style="margin-left:12.5vw" type="text" id="search" name='search' placeholder='Search through thousands of reviews'>
        <br>
            <select class="form-select" style="margin:auto;width:250px;" id="sort" name="sort">
                <option selected>Sort</option>
                <option value='hotelprice asc'>Pricing -- Low to High</option>
                <option value='hotelprice desc'>Pricing -- High to Low</option>
                <option value='hotelrating asc'>Rating -- Low to High</option>
                <option value='hotelrating desc'>Rating -- High to Low</option>
            </select>
        <br>
        <button class="btn btn-success col-1 mt-2" type="submit">Search!</button>
        </form>
        <br><br>
        <div class="row my-3">
        <?php 
            // $parts = parse_url(basename($_SERVER['REQUEST_URI']));
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['search'])) $queryParam = $_POST['search'];
                if(isset($_POST['sort'])) $sortParam = $_POST['sort'];
                if($sortParam=="Sort"){ $sortParam = "hotelprice";}
                $hotelsql=mysqli_query($conn,"SELECT * FROM hotels where hotelname like '%$queryParam%' or address like '%$queryParam%' or hoteldesc like '%$queryParam%' order by $sortParam");
            } else {
                $hotelsql=mysqli_query($conn,"SELECT * FROM hotels order by hotelprice asc");
            }
            while ($hotel = mysqli_fetch_array($hotelsql, MYSQLI_ASSOC)) {