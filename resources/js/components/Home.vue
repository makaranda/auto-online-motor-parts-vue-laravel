<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <h1>Testing</h1>
                        <button type="button" id="open_model" @click="openModal('Custom title', 'This is some custom content!')">Open Model</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ modalTitle }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ modalContent }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                modalTitle: 'Model',   // Data for modal title
                modalContent: 'Testing'  // Data for modal content
            };
        },
        methods: {
            openModal(title, content) {
                // Set data for modal dynamically
                this.modalTitle = title;
                this.modalContent = content;

                // Use Bootstrap's modal methods to show the modal
                const modalElement = document.getElementById('exampleModal');
                const modal = new bootstrap.Modal(modalElement); // Create a modal instance
                modal.show(); // Show the modal
            }
        }
    }
</script>
