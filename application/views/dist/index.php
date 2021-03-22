<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header">
                  <h4>Deals of the Day</h4>
                </div>
                <div class="card-body">
                  <div class="owl-carousel owl-theme" id="products-carousel">
                    <div>
                      <div class="product-item pb-4">
                        <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images44.jpg" class="img-fluid">
                        </div>
                        <div class="product-details">
                          <div class="product-name">iBook Pro 2018</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <div class="text-muted text-small">67 Sales</div>
                          <div class="product-cta">
                            <a href="<?php echo base_url('product_view')?>" class="btn btn-primary">Detail</a>
                          </div>
                        </div>  
                      </div>
                    </div>
                    <div>
                      <div class="product-item">
                        <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images47.jpg" class="img-fluid">
                        </div>
                        <div class="product-details">
                          <div class="product-name">oPhone S9 Limited</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                          </div>
                          <div class="text-muted text-small">86 Sales</div>
                          <div class="product-cta">
                            <a href="<?php echo base_url('product_view')?>" class="btn btn-primary">Detail</a>
                          </div>
                        </div>  
                      </div>

                    </div>
                    <div>
                      <div class="product-item">
                        <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">
                        </div>
                        <div class="product-details">
                          <div class="product-name">Headphone Blitz</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </div>
                          <div class="text-muted text-small">63 Sales</div>
                          <div class="product-cta">
                            <a href="<?php echo base_url('product_view')?>" class="btn btn-primary">Detail</a>
                          </div>
                        </div>  
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                   <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">
                        </div>
                  </div>
                  
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="<?php echo base_url(); ?>dist/features_tickets" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-lg-4 col-md-4 col-sm-12" style="display: none;">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Balance</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" style="display: none;">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sales</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">    
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Ryan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Ryan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">    
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">
                      <div class="card-header">
                        <h4>Gallery</h4>
                      </div>
                      <div class="card-body">
                        <div class="gallery">
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 1"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 2"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 3"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 4"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 5"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 6"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 7"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 8"></div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">
                      <div class="card-header">
                        <h4>Gallery</h4>
                      </div>
                      <div class="card-body">
                        <div class="gallery">
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 1"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 2"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 3"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 4"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 5"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 6"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 7"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 8"></div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">
                      <div class="card-header">
                        <h4>Gallery</h4>
                      </div>
                      <div class="card-body">
                        <div class="gallery">
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 1"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 2"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 3"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 4"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 5"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 6"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 7"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 8"></div>
                        </div>
                      </div>
                    </div>
              </div>
            </div>

          <div class="row">
              <div class="col-lg-4">
                <div class="chocolat-parent">
                      <a href="<?php echo base_url(); ?>assets/img/watch/images144.jpg" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images144.jpg" class="img-fluid">
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="chocolat-parent">
                      <a href="<?php echo base_url(); ?>assets/img/watch/images145.jpg" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images145.jpg" class="img-fluid">
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="chocolat-parent">
                      <a href="<?php echo base_url(); ?>assets/img/watch/images146.jpg" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images146.jpg" class="img-fluid">
                        </div>
                      </a>
                    </div>
              </div>

            </div>
            <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">    
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                        </div>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row" style="display: none;">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div>
                <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card gradient-bottom">
                <div class="card-header">
                  <h4>Top 5 Products</h4>
                  <div class="card-header-action dropdown">
                    <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                      <li class="dropdown-title">Select Period</li>
                      <li><a href="#" class="dropdown-item">Today</a></li>
                      <li><a href="#" class="dropdown-item">Week</a></li>
                      <li><a href="#" class="dropdown-item active">Month</a></li>
                      <li><a href="#" class="dropdown-item">This Year</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body" id="top-5-scroll">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-3-50.png" alt="product">
                      <div class="media-body">
                        <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Sales</div></div>
                        <div class="media-title">oPhone S9 Limited</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="64%"></div>
                            <div class="budget-price-label">$68,714</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="43%"></div>
                            <div class="budget-price-label">$38,700</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-4-50.png" alt="product">
                      <div class="media-body">
                        <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Sales</div></div>
                        <div class="media-title">iBook Pro 2018</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="84%"></div>
                            <div class="budget-price-label">$107,133</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="60%"></div>
                            <div class="budget-price-label">$91,455</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-1-50.png" alt="product">
                      <div class="media-body">
                        <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Sales</div></div>
                        <div class="media-title">Headphone Blitz</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="34%"></div>
                            <div class="budget-price-label">$3,717</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="28%"></div>
                            <div class="budget-price-label">$2,835</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-3-50.png" alt="product">
                      <div class="media-body">
                        <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Sales</div></div>
                        <div class="media-title">oPhone X Lite</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="45%"></div>
                            <div class="budget-price-label">$13,972</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="30%"></div>
                            <div class="budget-price-label">$9,660</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-5-50.png" alt="product">
                      <div class="media-body">
                        <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Sales</div></div>
                        <div class="media-title">Old Camera</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="35%"></div>
                            <div class="budget-price-label">$7,391</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="28%"></div>
                            <div class="budget-price-label">$5,472</div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-primary" data-width="20"></div>
                    <div class="budget-price-label">Selling Price</div>
                  </div>
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20"></div>
                    <div class="budget-price-label">Budget Price</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" style="height: 250px;">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img07.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img08.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" style="height: 250px;">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img07.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/news/img08.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
           
           <div class="row">
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Ryan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Ryan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                   <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">  
                        </div>

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="<?php echo base_url(); ?>dist/features_tickets" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                   <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">
                        </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="<?php echo base_url(); ?>dist/features_tickets" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                   <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">
                        </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="<?php echo base_url(); ?>dist/features_tickets" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                   <div class="product-image">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid">
                        </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="<?php echo base_url(); ?>dist/features_tickets" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">
                      <div class="card-header">
                        <h4>Gallery</h4>
                      </div>
                      <div class="card-body">
                        <div class="gallery">
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 1"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 2"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 3"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 4"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 5"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 6"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 7"></div>
                          <div class="gallery-item" data-image="<?php echo base_url(); ?>assets/img/watch/images48.jpg" data-title="Image 8"></div>
                        </div>
                      </div>
                    </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">    
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                      <div class="col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="<?php echo base_url(); ?>assets/img/watch/images48.jpg" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                        </div>
                        <div class="product-item pb-4">
                        <div class="product-details">
                          <div class="product-name">watch name</div>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>