<div class="container mt-4">
    <div class="card">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="<?= base_url($counselor['gambar']); ?>" class="card-img" alt="<?= $counselor['name']; ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-wrap"><?= $counselor['name']; ?></h5>
                    <p class="card-text text-justify"><?= $counselor['description']; ?></p>
                    <p class="card-text"><strong>Email:</strong> <?= $counselor['email']; ?></p>
                    <p class="card-text"><strong>Specialization:</strong> <?= $counselor['specialization']; ?></p>
                    <a href="<?= base_url('/counselors'); ?>" class="btn btn-primary">Back to Counselors</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* .card {
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    } */

    .card-img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .card-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .card-text {
        margin-bottom: 1rem;
        line-height: 1.5;
        text-align: justify;
    }

    /* .text-wrap {
        overflow-wrap: break-word;
    } */

    .btn {
        margin-top: auto;
    }

    .container {
        /* max-width: 800px; */
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        /* border-radius: 5px; */
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
    }
</style>
