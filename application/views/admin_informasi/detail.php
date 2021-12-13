    <section class="u-align-center u-clearfix u-section-1" id="carousel_6946">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-right u-custom-font u-font-montserrat u-text u-text-1">Assignment<br>
          <span style="font-weight: 700;"><?= $informasi['matkul']; ?></span>
        </h1>
        <div class="u-palette-1-base u-shape u-shape-circle u-shape-1"></div>
        <img class="u-image u-image-default u-image-1" data-image-width="1193" data-image-height="1080" src="<?= base_url(); ?>assets/img/informasi/image.png">
        <div class="u-align-left u-container-style u-grey-5 u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-2"><b><?= $informasi['judul']; ?></b></h3>
            <h4 class="u-text u-text-3">Deadline: <?= $informasi['deadline']; ?></h4>
            <p class="u-text u-text-3"><?= $informasi['deskripsi']; ?></p>
            <p class="u-text u-text-4">Created by Admin, <?= date('d F Y', $informasi['date_created']); ?></a>
            </p>
            <a  href="<?= base_url();?>admin_informasi/edit/<?= $informasi['id']; ?>" class="u-active-palette-1-dark-3 u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-base u-btn-2">Edit Informasi</a>
          </div>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-2">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xlink:href="#svg-c5ad"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-c5ad" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
      </div>
    </section>