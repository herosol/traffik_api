<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <!-- <li class=" <?= ($this->uri->segment(2) == 'vendors' || $this->uri->segment(2) == 'individuals') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Members</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'vendors') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/vendors') ?>">
                        <i class="fa fa-user"></i>
                            <span class="title">Vendors</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'individuals') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/individuals') ?>">
                            <i class="fa fa-user"></i>
                            <span class="title">Individuals </span>
                        </a>
                    </li>
                </ul>
            </li> -->
            <li class="opened <?= ($this->uri->segment(2) == 'vlogs') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/vlogs') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Blogs</span>
                    <span class="badge badge-info"></span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'events') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/events') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Events</span>
                    <span class="badge badge-info"></span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'rescue_stories') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/rescue_stories') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Rescue Stories</span>
                    <span class="badge badge-info"></span>
                </a>
            </li>
            <!-- <li class="opened <?= ($this->uri->segment(2) == 'news') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/news') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage News</span>
                    <span class="badge badge-info"></span>
                </a>
            </li> -->
            <!-- <li class="opened <?= ($this->uri->segment(2) == 'invoices') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/invoices') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Invoices</span>
                </a>
            </li> -->
           
            
            <li class="opened<?= $this->uri->segment('2') == 'contact' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/contact') ?>">
                    <i class="fa fa-comments"></i>
                    <span class="title">Manage Contacts</span><span class="badge badge-info"><?=new_messages()?></span>
                </a>
            </li>
            
            <li class=" <?= ($this->uri->segment(2) == 'national_directory_organizations') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">National Directory Organizations</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'tags') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/tags') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Search Tags</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'national_directory_organizations') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/national_directory_organizations') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Organizations</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'what_is_human_traffiking') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/what_is_human_traffiking') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">What is human traffiking</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'what_is_sex_traffiking') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/what_is_sex_traffiking') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">What is sex traffiking</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'fact_and_stats') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/fact_and_stats') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Facts, And Statistics</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'policy_and_legislation') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/policy_and_legislation') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Policy And Legislation</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'corporate_partners') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/corporate_partners') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Corporate Partners</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'start_a_fundraiser') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/start_a_fundraiser') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Start A Fundraiser</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'help_and_resources') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/help_and_resources') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Help And Resources</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'traffik_and_sex') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/traffik_and_sex') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Traffik & Sex</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'national_directory') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/national_directory') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">National Directory</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'our_sponsors') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/our_sponsors') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Our Sponsors</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'donate_now') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/donate_now') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Donate Now</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'donate_pay_now') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/donate_pay_now') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Donate Pay Now</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'events_near_you') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/events_near_you') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Events Near You</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'current_affairs') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/current_affairs') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Current Affairs</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'rescue_stories') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/rescue_stories') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Rescue Stories</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'rescue_story_detail') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/rescue_story_detail') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Rescue Story Detail</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'blog_detail') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/blog_detail') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Blog Detail</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'news_detail') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/news_detail') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">News Detail</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'share_story') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/share_story') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Share Story</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'project_unit') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/project_unit') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Project Unite</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'signin') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/signin') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Sign In</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'signup') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/signup') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Sign Up</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about_us') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about_us') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                    <!-- <li class=" <?= ($this->uri->segment(3) == 'terms_conditions') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/terms_conditions') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Terms & Conditions</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'privacy_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/privacy_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Privacy Policy</span>
                        </a>
                    </li> -->
                </ul>
            </li>
            <!-- <li class="opened<?= $this->uri->segment('2') == 'testimonials' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/testimonials') ?>">
                    <i class="fa fa-comments"></i>
                    <span class="title">Manage Testimonials</span>
                </a>
            </li> -->
            <li class="opened<?= $this->uri->segment('2') == 'partners' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/partners') ?>">
                    <i class="fa fa-comments"></i>
                    <span class="title">Manage Partners</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'faq') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/faq') ?>">
                    <i class="fa fa-th-list"></i>
                    <span class="title">Manage FAQ's</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'newsletter') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/newsletter') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Newsletter</span><span class="badge badge-info"><?=new_subscribers()?></span>
                </a>
            </li>
            <!-- <li class="opened <?= ($this->uri->segment(2) == 'promos') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/promos') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Promotions</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'email_logs') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/email_logs') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">See Email Logs</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'invoices') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/Blogs') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Blogs</span>
                </a>
            </li> -->

            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/meta-info') ?>">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <!-- <li class="opened <?= ($this->uri->segment(2) == 'texts') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN) ?>/texts">
                    <i class="fa fa-cog"></i>
                    <span class="title">Manage Notifications</span>
                </a>
            </li> -->
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>