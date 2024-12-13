<style type="text/css">
  #menu .jumbotron {
    background-image: url(<?= base_url('assets/images/3homepage.WEBP') ?>);
    background-size: cover;
    background-attachment: fixed;
    height: 580px;
    position: relative;
    z-index: 1;
  }

  #menu .jumbotron .container {
    position: relative;
    z-index: 3;
  }

  #menu .jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .4);
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, .4), rgba(0, 0, 0, 0));
    position: absolute;
    bottom: 0;
    z-index: 2;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JUMBOTRON -->
<div id="menu">
  <div class="jumbotron jumbotron-fluid mb-0">
    <div class="container">
      <div id="text">
        <h1>Discover <span>Our News</span></h1>
        <p class="lead">Stay up-to-date with the latest headlines and exclusive updates. </p>
      </div>
    </div>
  </div>
</div>
<!-- END JUMBOTRON -->
<div class="container mt-5">
    <h2>Event List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Event Date</th>
                <th>Is Published</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news_events as $event): ?>
                <tr>
                    <td><?php echo $event['id']; ?></td>
                    <td><?php echo $event['title']; ?></td>
                    <td><?php echo $event['content']; ?></td>
                    <td><?php echo date('Y-m-d H:i:s', strtotime($event['eventDate'])); ?></td>
                    <td><?php echo $event['isPublished'] ? 'Yes' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS and jQuery (for JSON parsing and table population) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
 .container.mt-5 {
    padding-bottom: 90px;
}

</style>