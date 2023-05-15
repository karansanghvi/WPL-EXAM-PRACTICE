<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wplexam";

$conn = mysqli_connect('localhost', 'root', '', 'wplexam');

// check if author_name variable is set
if(isset($_GET['author_name'])) {
  $author_name = $_GET['author_name'];

  $sql = "SELECT * FROM books WHERE author_name='$author_name'";
  $result = mysqli_query($conn, $sql);

  // check if query was executed successfully
  if($result === false) {
    echo mysqli_error($conn);
  } else {
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "Book Name: " . $row['book_name'] . "<br>";
        echo "Author Name:" . $row['author_name'] . "<br>";
        echo "Price" . $row['price'] . "<br>";
        echo "Quantity" . $row['quantity'] . "<br>";
    }
  }
} else {
  echo "Author name not specified in URL";
}

$url = "index.html";
$linkText = "Go to home page";
?>

<a href="<?php echo $url;?>"> <?php echo $linkText; ?></a>

