<?php $__env->startSection('title', $post->title . ' - Metro Health Hospital'); ?>

<?php $__env->startSection('content'); ?>
<!-- Elegant Hero Header with Overlay -->
<section class="blog-hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <nav aria-label="breadcrumb" class="blog-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('news-update.index')); ?>">News & Articles</a></li>
                        <li class="breadcrumb-item active">Article</li>
                    </ol>
                </nav>
                
                <?php if($post->category): ?>
                <div class="article-category-badge">
                    <i class="fas fa-bookmark"></i> <?php echo e($post->category); ?>

                </div>
                <?php endif; ?>
                
                <h1 class="hero-title"><?php echo e($post->title); ?></h1>
                
                <div class="article-meta-info">
                    <div class="meta-item">
                        <div class="author-avatar">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="meta-content">
                            <span class="meta-label">Written by</span>
                            <span class="meta-value"><?php echo e($post->author); ?></span>
                        </div>
                    </div>
                    <div class="meta-divider"></div>
                    <div class="meta-item">
                        <i class="far fa-calendar-alt"></i>
                        <span class="meta-value"><?php echo e($post->published_at ? $post->published_at->format('F d, Y') : 'Recent'); ?></span>
                    </div>
                    <div class="meta-divider"></div>
                    <div class="meta-item">
                        <i class="far fa-clock"></i>
                        <span class="meta-value"><?php echo e(ceil(str_word_count($post->content) / 200)); ?> min read</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="blog-content-section">
    <div class="container">
        <div class="row">
            <!-- Main Article Content -->
            <div class="col-lg-8">
                <article class="blog-article-card">
                    <!-- Featured Image with Elegant Frame -->
                    <?php if($post->image): ?>
                    <div class="featured-image-wrapper">
                        <div class="image-frame">
                            <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="featured-image">
                            <div class="image-overlay"></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Article Content -->
                    <div class="article-body">
                        <div class="content-wrapper">
                            <?php
                                $content = e($post->content);
                                $content = preg_replace(
                                    '#(https?://[^\s<]+)#i',
                                    '<a href="$1" target="_blank" rel="noopener noreferrer" class="content-link">$1</a>',
                                    $content
                                );
                                $content = nl2br($content);
                            ?>
                            <?php echo $content; ?>

                        </div>
                    </div>

                    <!-- Article Footer -->
                    <div class="article-footer">
                        <!-- Tags -->
                        <?php if($post->category): ?>
                        <div class="article-tags">
                            <span class="tags-label"><i class="fas fa-tags"></i> Tags:</span>
                            <a href="<?php echo e(route('news-update.index')); ?>?category=<?php echo e($post->category); ?>" class="tag-item"><?php echo e($post->category); ?></a>
                        </div>
                        <?php endif; ?>

                        <!-- Social Share -->
                        <div class="social-share-section">
                            <h5 class="share-title"><i class="fas fa-share-alt"></i> Share This Article</h5>
                            <div class="share-buttons-elegant">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" target="_blank" class="share-btn facebook">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($post->title)); ?>" target="_blank" class="share-btn twitter">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode(url()->current())); ?>" target="_blank" class="share-btn linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                    <span>LinkedIn</span>
                                </a>
                                <a href="https://wa.me/?text=<?php echo e(urlencode($post->title . ' ' . url()->current())); ?>" target="_blank" class="share-btn whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </a>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="article-navigation">
                            <a href="<?php echo e(route('news-update.index')); ?>" class="btn-back-elegant">
                                <i class="fas fa-arrow-left"></i>
                                <span>Back to All News</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Elegant Sidebar -->
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    <!-- Services Widget -->
                    <div class="sidebar-widget services-widget">
                        <div class="widget-header">
                            <div class="widget-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h4 class="widget-title">Our Services</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="elegant-services-list">
                                <?php
                                    $services = \App\Models\Service::active()->ordered()->take(6)->get();
                                ?>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="service-item">
                                    <a href="<?php echo e(route('services.show', $service->slug)); ?>" class="service-link">
                                        <span class="service-icon"><i class="fas fa-chevron-right"></i></span>
                                        <span class="service-name"><?php echo e($service->title); ?></span>
                                        <span class="service-arrow"><i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <a href="<?php echo e(route('services.index')); ?>" class="widget-btn">
                                View All Services
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Recent News Widget -->
                    <div class="sidebar-widget news-widget">
                        <div class="widget-header">
                            <div class="widget-icon">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <h4 class="widget-title">Recent News</h4>
                        </div>
                        <div class="widget-body">
                            <div class="elegant-news-list">
                                <?php if(isset($relatedPosts) && $relatedPosts->count() > 0): ?>
                                    <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="news-item">
                                        <a href="<?php echo e(route('news-update.show', $related->slug)); ?>" class="news-link">
                                            <?php if($related->image): ?>
                                            <div class="news-thumbnail">
                                                <img src="<?php echo e(asset('storage/' . $related->image)); ?>" alt="<?php echo e($related->title); ?>">
                                                <div class="thumbnail-overlay"></div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="news-content">
                                                <h6 class="news-title"><?php echo e(Str::limit($related->title, 65)); ?></h6>
                                                <div class="news-meta">
                                                    <i class="far fa-calendar"></i>
                                                    <span><?php echo e($related->published_at ? $related->published_at->format('M d, Y') : 'Recent'); ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <?php
                                        $recentPosts = \App\Models\BlogPost::published()
                                            ->where('id', '!=', $post->id)
                                            ->latest('published_at')
                                            ->take(4)
                                            ->get();
                                    ?>
                                    <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="news-item">
                                        <a href="<?php echo e(route('news-update.show', $recent->slug)); ?>" class="news-link">
                                            <?php if($recent->image): ?>
                                            <div class="news-thumbnail">
                                                <img src="<?php echo e(asset('storage/' . $recent->image)); ?>" alt="<?php echo e($recent->title); ?>">
                                                <div class="thumbnail-overlay"></div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="news-content">
                                                <h6 class="news-title"><?php echo e(Str::limit($recent->title, 65)); ?></h6>
                                                <div class="news-meta">
                                                    <i class="far fa-calendar"></i>
                                                    <span><?php echo e($recent->published_at ? $recent->published_at->format('M d, Y') : 'Recent'); ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo e(route('news-update.index')); ?>" class="widget-btn">
                                View All News
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="cta-overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Experience Quality Healthcare?</h2>
                    <p class="cta-subtitle">Our team of experienced healthcare professionals is ready to serve you</p>
                    
                    <div class="cta-contact">
                        <div class="cta-phone">
                            <i class="fas fa-phone-alt"></i>
                            <div class="phone-content">
                                <span class="phone-label">Call Us Now</span>
                                <a href="tel:+233241850091" class="phone-number">+233 24 185 0091</a>
                            </div>
                        </div>
                        
                        <div class="cta-divider">
                            <span>OR</span>
                        </div>
                        
                        <div class="cta-button-wrapper">
                            <a href="<?php echo e(route('booking.index')); ?>" class="btn-appointment">
                                <i class="fas fa-calendar-check"></i>
                                <span>Schedule Your Appointment</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* Blog Hero Section */
.blog-hero-section {
    position: relative;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    padding: 140px 0 80px;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
    z-index: 1;
}

.blog-hero-section .container {
    z-index: 2;
}

.blog-breadcrumb .breadcrumb {
    background: transparent;
    padding: 0;
    margin-bottom: 25px;
}

.blog-breadcrumb .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.blog-breadcrumb .breadcrumb-item a:hover {
    color: white;
}

.blog-breadcrumb .breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.7);
}

.blog-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.6);
    content: "›";
}

.article-category-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 25px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-title {
    color: white;
    font-size: 2.8rem;
    font-weight: 800;
    line-height: 1.3;
    margin-bottom: 30px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.article-meta-info {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 20px 30px;
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: white;
}

.author-avatar {
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.meta-content {
    display: flex;
    flex-direction: column;
}

.meta-label {
    font-size: 0.75rem;
    opacity: 0.9;
}

.meta-value {
    font-weight: 600;
    font-size: 0.95rem;
}

.meta-divider {
    width: 1px;
    height: 30px;
    background: rgba(255, 255, 255, 0.3);
}

/* Blog Content Section */
.blog-content-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.blog-article-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    margin-bottom: 30px;
}

.featured-image-wrapper {
    padding: 30px 30px 0;
}

.image-frame {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.featured-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.6s ease;
}

.image-frame:hover .featured-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.1) 100%);
}

.article-body {
    padding: 40px 50px;
}

.content-wrapper {
    color: #333;
    font-size: 1.1rem;
    line-height: 1.9;
    font-weight: 400;
}

.content-wrapper p {
    margin-bottom: 1.5rem;
}

.content-link {
    color: #a8207a;
    text-decoration: none;
    border-bottom: 1px solid rgba(168, 32, 122, 0.3);
    transition: all 0.3s ease;
}

.content-link:hover {
    color: #7ba428;
    border-bottom-color: #7ba428;
}

.article-footer {
    padding: 30px 50px 40px;
    border-top: 2px solid #f0f0f0;
}

.article-tags {
    margin-bottom: 30px;
}

.tags-label {
    color: #666;
    font-weight: 600;
    margin-right: 15px;
    font-size: 0.95rem;
}

.tag-item {
    display: inline-block;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    color: white;
    padding: 6px 18px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.tag-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(168, 32, 122, 0.3);
    color: white;
}

.social-share-section {
    margin: 35px 0;
}

.share-title {
    color: #2d3e50;
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.share-buttons-elegant {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.share-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: 30px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.share-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    color: white;
}

.share-btn.facebook {
    background: linear-gradient(135deg, #3b5998 0%, #4c70ba 100%);
}

.share-btn.twitter {
    background: linear-gradient(135deg, #1da1f2 0%, #4ab3f4 100%);
}

.share-btn.linkedin {
    background: linear-gradient(135deg, #0077b5 0%, #0e8bc3 100%);
}

.share-btn.whatsapp {
    background: linear-gradient(135deg, #25d366 0%, #3ae374 100%);
}

.btn-back-elegant {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #7ba428 0%, #93c03a 100%);
    color: white;
    padding: 14px 32px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: 0 5px 20px rgba(123, 164, 40, 0.3);
}

.btn-back-elegant:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(123, 164, 40, 0.4);
    color: white;
}

/* Elegant Sidebar */
.blog-sidebar {
    position: sticky;
    top: 100px;
}

.sidebar-widget {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    margin-bottom: 30px;
    transition: all 0.3s ease;
}

.sidebar-widget:hover {
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.widget-header {
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.widget-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
}

.widget-title {
    color: white;
    font-weight: 800;
    font-size: 1.3rem;
    margin: 0;
}

.widget-body {
    padding: 25px;
}

.elegant-services-list {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.service-item {
    margin-bottom: 8px;
}

.service-link {
    display: flex;
    align-items: center;
    padding: 14px 18px;
    background: #f8f9fa;
    border-radius: 12px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.service-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    transform: scaleY(0);
    transition: transform 0.3s ease;
}

.service-link:hover::before {
    transform: scaleY(1);
}

.service-link:hover {
    background: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transform: translateX(5px);
    color: #a8207a;
}

.service-icon {
    color: #7ba428;
    margin-right: 12px;
    font-size: 0.8rem;
    transition: all 0.3s ease;
}

.service-link:hover .service-icon {
    color: #a8207a;
}

.service-name {
    flex: 1;
    font-weight: 600;
    font-size: 0.95rem;
}

.service-arrow {
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
    color: #a8207a;
}

.service-link:hover .service-arrow {
    opacity: 1;
    transform: translateX(0);
}

.widget-btn {
    display: block;
    text-align: center;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    color: white;
    padding: 14px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(168, 32, 122, 0.3);
}

.widget-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(168, 32, 122, 0.4);
    color: white;
}

.elegant-news-list {
    margin-bottom: 20px;
}

.news-item {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f0f0f0;
}

.news-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.news-link {
    display: flex;
    gap: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.news-thumbnail {
    width: 90px;
    height: 90px;
    flex-shrink: 0;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
}

.news-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.news-link:hover .news-thumbnail img {
    transform: scale(1.1);
}

.thumbnail-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(168, 32, 122, 0.7) 0%, rgba(123, 164, 40, 0.7) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.news-link:hover .thumbnail-overlay {
    opacity: 1;
}

.news-content {
    flex: 1;
}

.news-title {
    color: #2d3e50;
    font-weight: 700;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 8px;
    transition: color 0.3s ease;
}

.news-link:hover .news-title {
    color: #a8207a;
}

.news-meta {
    color: #999;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Responsive Design */
@media (max-width: 991px) {
    .blog-sidebar {
        position: static;
        margin-top: 40px;
    }
    
    .hero-title {
        font-size: 2.2rem;
    }
    
    .article-body {
        padding: 30px 25px;
    }
    
    .article-footer {
        padding: 25px;
    }
}

@media (max-width: 767px) {
    .hero-title {
        font-size: 1.8rem;
    }
    
    .article-meta-info {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .meta-divider {
        display: none;
    }
    
    .share-buttons-elegant {
        flex-direction: column;
    }
    
    .share-btn {
        width: 100%;
        justify-content: center;
    }
    
    .featured-image-wrapper {
        padding: 20px 20px 0;
    }
    
    .article-body {
        padding: 25px 20px;
    }
    
    .article-footer {
        padding: 20px;
    }
}

/* Call to Action Section */
.cta-section {
    position: relative;
    background: linear-gradient(135deg, rgba(168, 32, 122, 0.95) 0%, rgba(123, 164, 40, 0.95) 100%),
                url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1600') center/cover;
    padding: 100px 0;
    margin-top: 0;
    overflow: hidden;
}

.cta-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    z-index: 1;
}

.cta-section .container {
    z-index: 2;
}

.cta-content {
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.cta-title {
    color: white;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
    line-height: 1.2;
}

.cta-subtitle {
    color: rgba(255, 255, 255, 0.95);
    font-size: 1.25rem;
    margin-bottom: 50px;
    font-weight: 400;
}

.cta-contact {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}

.cta-phone {
    display: flex;
    align-items: center;
    gap: 20px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 25px 40px;
    border-radius: 20px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
}

.cta-phone:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.cta-phone i {
    font-size: 2.5rem;
    color: white;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

.phone-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.phone-label {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 5px;
}

.phone-number {
    color: white;
    font-size: 1.8rem;
    font-weight: 800;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.phone-number:hover {
    color: #fff;
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
}

.cta-divider {
    position: relative;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cta-divider::before,
.cta-divider::after {
    content: '';
    position: absolute;
    width: 30px;
    height: 2px;
    background: rgba(255, 255, 255, 0.4);
}

.cta-divider::before {
    left: -35px;
}

.cta-divider::after {
    right: -35px;
}

.cta-divider span {
    color: white;
    font-weight: 700;
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 16px;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.btn-appointment {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    background: white;
    color: #a8207a;
    padding: 20px 45px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.15rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.btn-appointment::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    transition: left 0.4s ease;
    z-index: -1;
}

.btn-appointment:hover::before {
    left: 0;
}

.btn-appointment:hover {
    color: white;
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
}

.btn-appointment i {
    font-size: 1.3rem;
    transition: transform 0.3s ease;
}

.btn-appointment:hover i {
    transform: scale(1.2) rotate(10deg);
}

/* Responsive Design for CTA */
@media (max-width: 991px) {
    .cta-title {
        font-size: 2.5rem;
    }
    
    .cta-contact {
        gap: 30px;
    }
}

@media (max-width: 767px) {
    .cta-section {
        padding: 60px 0;
    }
    
    .cta-title {
        font-size: 2rem;
    }
    
    .cta-subtitle {
        font-size: 1.1rem;
        margin-bottom: 35px;
    }
    
    .cta-contact {
        flex-direction: column;
        gap: 25px;
    }
    
    .cta-phone {
        width: 100%;
        justify-content: center;
        padding: 20px 30px;
    }
    
    .phone-content {
        align-items: center;
    }
    
    .phone-number {
        font-size: 1.5rem;
    }
    
    .cta-divider {
        transform: rotate(90deg);
    }
    
    .btn-appointment {
        width: 100%;
        justify-content: center;
        padding: 18px 35px;
        font-size: 1.05rem;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/blog/show.blade.php ENDPATH**/ ?>