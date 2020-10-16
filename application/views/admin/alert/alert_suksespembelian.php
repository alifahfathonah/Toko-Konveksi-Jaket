<!-- Navigation -->
   <?php 
        $this->load->view('admin/templates/v_header');
		$this->load->view('admin/templates/v_sidebar');
   ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="">Pembelian Bahan Baku</li>
				<li class="active">Cetak Pembelian Bahan Baku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cetak Pembelian Bahan Baku</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<center><?php echo $this->session->flashdata('msg');?></center>
					<div class="panel-heading">
					
						Selamat,
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						
							

        <!-- Page Heading -->
       
            <div class="col-lg-12">
                <div class="alert alert-success" style="height:100px;" align="center">
                    <strong>Pembelian Bahan Baku Berhasil Disimpan, Silahkan Cetak Daftar Pembelian Bahan Baku!</strong><br><br>
                    <a class="btn btn-danger" href="<?php echo base_url().'admin/pembeliankain'?>"><span class="fa fa-backward"></span> Kembali</a> ||
                    <a class="btn btn-info" href="<?php echo base_url().'admin/pembeliankain/cetak_faktur'?>" target="_blank"><span class="fa fa-print"></span> Cetak Daftar</a>
                </div>
            </div>
      
        <!-- /.row -->
        <!-- Projects Row -->
       
        

        <!--END MODAL-->

    </div></div></div>
    <!-- /.container -->

<?php 
	$this->load->view('admin/templates/v_footer');
?>
