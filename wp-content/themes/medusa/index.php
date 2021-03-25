<?php        
    /*
    * Template Name: Home Page
    * Template Post Type: post, page, product
    */
?>
<?php
    session_start();
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){   
        $request = md5( implode( $_POST ) );        
    
        if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request'] == $request ){            
            $msg = '';       
    
        } else {
            
            $_SESSION['last_request']  = $request; 
            extract($_POST);

            include 'send_mail.php';
        }
    }
?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section id="about" class="container-banner">
        <div class="black-container-right relative">
            <?php $banner_group = get_field('banner_group'); ?>
            <h1 class="m-title">
                <span><?php echo $banner_group['title']; ?></span>
                <span class="bar devider absolute"></span>
            </h1>
            <?php echo $banner_group['content']; ?>
            <div class="group-button">
                <a class="uk-button uk-button-danger">View Our Services</a>
                <a class="uk-button uk-button-danger">Software We Offer</a>
            </div> 
        </div>
    </section>
    <section id="service" class="container-service bg-service">
        <?php $service_group = get_field('service_group'); ?>
        <div class="container">
            <div class="col-5 content-text">
                <h2>
                    <?php echo $service_group['title']; ?>
                </h2>
                <?php echo $service_group['content']; ?>
                <a class="uk-button uk-button-danger">See Our Case Studies</a>
            </div>
            <div class="col-5 content-image relative">
                <img src="<?php echo esc_url( $service_group['image']['url'] ); ?>" alt="">
            </div>
        </div>
    </section>
    <section id="contact" class="container-contact">
        <?php $contact_group = get_field('contact_group'); ?>
        <div class="col-6">
            <div class="content-text-form">
                <h2><?php echo $contact_group['title']; ?></h2>
            </div>
            <div class="content-form">
                <div class="col-12">
                    <h4><?php echo $contact_group['subtitle']; ?></h4>
                </div>
                <?php if(!empty($msg)): ?>
                    <div class="uk-alert-success" uk-alert style="max-width: 826px;">
                        <a class="uk-alert-close" uk-close></a>
                        <p><?php echo $msg; ?></p>
                    </div>
                <?php endif; ?>
                <form action="" class="box-form uk-grid-small" uk-grid method="post" enctype="multipart/form-data">
                    
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-flex uk-flex-right@s">
                            <div><button type="submit" class="uk-button uk-button-danger">Submit</button></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>