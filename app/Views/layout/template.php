<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        @media print {

        @page {margin: 0;}
        body {margin: 1.6cm;}

        #printPage {
            display: none;
        
            }
        }



    </style>
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PT Century Battery Indonesia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('astra') ?>">Individual Performance Plan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Performance Appraisal
                </a>
                <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?= base_url('astra/mid_year_result'); ?>">Mid Year Result Review</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('astra/one_year_result'); ?>">One Year Result Review</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('astra/summary'); ?>">Summary</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('astra/strength_weakness'); ?>">Strength & Weakness</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('astra/coach'); ?>">Coach Form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Hello, <?php echo session()->get('member_username')?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('astra/login_view'); ?>" > Logout </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">PT Century Battery Indonesia</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>