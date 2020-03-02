<section class="top-content-inside about">
    <div class="container">
        <div class="titlepage-Inside">
            <h1>SERVICES</h1>
        </div>
    </div>
    <div class="celar"></div>
</section>
<section class="middle-content">
        <div class="prelatife container">
            <div class="content-text">
                <div class="clear height-50"></div>
                <div class="height-5"></div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>We&#39;ll help you to <span>understand,</span> <br>
                            the best solution for you...</h2>
                        <h4>DV Computers will help you withrepairs and upgrades <br>
                            for both Mac and Windows machines. <br>
                            We also do virus removal and data recovery.</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    We understand the challenges and thrills that come with running a small business. Heck, we're a small business our self.  Regardless of the size of your business we are able to provide IT related services to suit your needs and make sure you're always running at 100%. 
                                </p>
                            </div>
                            <div class="col-md-6">
                                <b>Learn more about our services:</b> 
                                <div class="clear height-10"></div>
                                <ul>
                                    <li>Computer Repairs</li>
                                    <li>Apple repairs</li>
                                    <li>DATA Recovery</li>
                                    <li>Virus removal</li>
                                    <li>Networking</li>
                                    <li>Sales and service warranty</li>
                                    <li>Other</li>
                                </ul>

                            </div>
                        </div>

                            <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl; ?>/asset/images/ill-services-dv-computers.png" alt=""></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clear height-5"></div>
                <?php 
                    $data = array(
                        array(
                            'title'=>'Computer Repairs',
                            'image'=>'service-repairs.jpg',
                            't_serv_for'=>'Computer Repairs Services for:',
                            'service'=>'<ul>

                                        <li>Slow Computers</li>
                                        <li>Hardware Failure</li>
                                        <li>Boot Failure</li>
                                        <li>Software Upgrades &amp; Installation</li>
                                        <li>Hardware Upgrades</li>
                                    </ul>',
                            'desc'=>'<p>At DV Computers, we are specialized computer repairs. You can either come to us or if you’re within Perth Metro, we’ll come to you. Our technicians will diagnose and repair your computer in the best delays and always at the best price. </p>',
                            ),
                        array(
                            'title'=>'Apple Repairs',
                            'image'=>'service-apple-repair.jpg',
                            't_serv_for'=>'Apple Repairs Services for:',
                            'service'=>'<ul>
                                            <li>Your apple getting slower?</li>
                                            <li>Hardware Failure</li>
                                            <li>Apple Software Upgrades & Installation</li>
                                            <li>Apple Hardware Upgrades</li>
                                        </ul>',
                            'desc'=>'<p>At DV Computers we know how to treat apple computers. Our Apple repair technicians at DV Computers are top-of-the-line in providing fast and flawless Apple computer repairs and fixes.</p>',
                            ),
                        // array(
                        //     'title'=>'Ricoh Printer Supplier',
                        //     'image'=>'service-printer.jpg',
                        //     't_serv_for'=>'Ricoh Printer supplier We provide:',
                        //     'service'=>'<ul>
                        //                 <li>Ricoh printer trouble handling</li>
                        //                 <li>Ricoh printer trade in programs</li>
                        //                 <li>Ricoh printer latest models and supplies</li>
                        //             </ul>',
                        //     'desc'=>'<p>DV Computers is your partner for the well-known reliable business grade Ricoh printers. Trust all your printing needs to Ricoh printers as we at DV Computers will be the unbeatable formation of hardware supply and repair solutions for your ricoh printers.</p>',
                        //     ),
                        array(
                            'title'=>'Data Recovery',
                            'image'=>'service-databackup.jpg',
                            't_serv_for'=>'Data Back Up Services for:',
                            'service'=>'<ul>
                                            <li>Data recovery</li>
                                            <li>Data backup / restore</li>
                                            <li>Network Storage</li>
                                            <li>Backup plans</li>
                                        </ul>',
                            'desc'=>'<p>At DV Computers we do professional datarecovery.  From problems associated with OS corruptions, to bad sectors/partitions,corrupted partitions, mechanical or physical damage, damaged circuit board, power surge, accidental device knocks or dropping, waterdamage, scratching or grinding noises, failure due to wear and tear.   We will also help you to restore and select the adequate backup solution. From external hard drives to network attached storages.</p>',
                            ),
                        array(
                            'title'=>'Virus Removal',
                            'image'=>'service-virus-removal.jpg',
                            't_serv_for'=>'Virus Removal Services for:',
                            'service'=>'<ul>
                                            <li>Virus removal</li>
                                            <li>Trojan removal</li>
                                            <li>Malware removal</li>
                                            <li>Spyware and worm removal</li>
                                            <li>Protection strategies</li>
                                        </ul>',
                            'desc'=>'<p>At any given time thousands of computer viruses, worms and spyware are in circulation on the internet. Thousands of users that are prime targets for email attacks, identity theft and malicious programs. DV Computers will help you to stay safe and secure at all time.</p>',
                            ),
                        array(
                            'title'=>'Networking',
                            'image'=>'service-network.jpg',
                            't_serv_for'=>'Networking Services for:',
                            'service'=>'<ul>
                                            <li>Business &Home network setup</li>
                                            <li>Internet setup</li>
                                            <li>WIFI setup</li>
                                            <li>Wireless Broadband setup</li>
                                        </ul>',
                            'desc'=>'<p>Ethernet, WIFI, 4G, 3G, at DV Computers we’re networking experts! We’ll help you setup and install the perfect network infrastructure. Wired, wireless and even both! Because we know that you might want to take internet everywhere with you, we also provide wireless broadband services and recharge services.</p>',
                            ),
                        // array(
                        //     'title'=>'MOBILE-WIRELESS',
                        //     'image'=>'service-wireless.jpg',
                        //     't_serv_for'=>'Mobile-Wireless Services for:',
                        //     'service'=>'<ul>
                        //                     <li>Wireless Broadband Access setup</li>
                        //                     <li>Wireless networking installation</li>
                        //                     <li>Wireless networking hardwares</li>
                        //                 </ul>',
                        //     'desc'=>'<p>Wireless Broadband Access gives you the freedom to connect to the Internet almost anywhere at Broadband speeds. With wireless broadband there is no need for a phone line connection and is now an increasingly popular option. Depending on the wireless internet provider you can now get wireless internet access across most populated areas in Australia.</p>
                        //             <!-- <p>DV Computers is an authorised dealer for 3 Mobile wireless. Customers can be connected instantly in the shop. The requirement is to provide a 100 point proof of identification. Please call us for further details.</p> -->',
                        //     ),
                        // array(
                        //     'title'=>'Kaspersky',
                        //     'image'=>'service-sphos.jpg',
                        //     't_serv_for'=>'Kaspersky Services for:',
                        //     'service'=>'<ul>
                        //                     <li>Total Security Multi-Device</li>
                        //                     <li>Internet Security</li>
                        //                     <li>Anti Virus solution</li>
                        //                     <li>Software Problem Resolution</li>
                        //                 </ul>',
                        //     'desc'=>'<p>With Kaspersky, DV Computers will help corporate clients with a broad range of services that include but not limited to support, maintenance and consultation services incorporated in two programs:<br /><strong>Business Support Program</strong> and <strong>Enterprise Support Program</strong>.</p>
                        //             <p>The Kaspersky Business Support Program and Enterprise Support Program are intended to delivery of services in every region where Kaspersky products that require technical support have been sold. Both programs have a strong focus on delivery of high quality services managed in the framework of corresponding Maintenance Services Agreements.</p>',
                        //     ),
                        array(
                            'title'=>'Sales & Service Warranty',
                            'image'=>'sales-service.jpg',
                            't_serv_for'=>'Sales & Service Warranty Our commitment:',
                            'service'=>'<ul>
                                            <li>30 month labour warranty on any of our computers (refurbished and brand new)</li>
                                            <li>14 day free exchange on our refurbished range</li>
                                    </ul>',
                            'desc'=>'
Warranty: <br>
<p>
- Refurbished Laptop: 6 month on parts + 30 months on labour <br>
- Refurbished Desktop: minimum of 12 months on parts + 30 months on labour <br>
- Refurbished Equipment: 3 months <br>
- New Laptop& desktop: minimum new manufacturer warranty <br>
</p>
                            ',
                            ), 
                        array(
                            'title'=>'Other',
                            'image'=>'service-other.jpg',
                            't_serv_for'=>'Our other services:',
                            'service'=>'<ul>
                                            <li>Laptop screen repairs</li>
                                            <li>Insurance quotes</li>
                                            <li>Ricoh printers & photocopiers</li>
                                            <li>Surveillance systems</li>
                                            <li>Assets assessments</li>
                                            <li>Maintenance contracts</li>
                                        </ul>',
                            'desc'=>'',
                            ),
                        );
                ?>
                <div class="list-data-service">
                    <?php foreach ($data as $key => $value): ?>
                    <!-- start item service -->
                    <div class="item">
                        <h4 class="title"><?php echo $value['title'] ?></h4>
                        <div class="clear"></div>
                        <div class="lines-grey"></div>
                        <div class="clear height-15"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="picture"><img src="<?php echo Yii::app()->baseUrl; ?>/images/service/<?php echo $value['image'] ?>" alt=""></div>
                                    </div>
                                    <div class="col-md-6 col-sm-8">
                                        <b><?php echo $value['t_serv_for'] ?></b> <br>
                                        <?php echo $value['service'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="clear height-10"></div>
                                <div class="desc">
                                    <?php echo $value['desc'] ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear height-40"></div>
                    </div>
                    <!-- end item service -->
                    <?php endforeach ?>

                    <div class="clearfix"></div>
                </div>
                <div class="clear height-50"></div>
            </div>
            <div class="clear"></div>
        </div>
    <div class="clear"></div>
</section>