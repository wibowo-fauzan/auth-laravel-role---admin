<div class="continer-xxl-09">
    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/IP57OKJlywA?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/tRTqLiKmVBg/0.jpg" alt="Tashoora - Hitam">
    </div>

    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/yNcGtKAacts?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/yNcGtKAacts/0.jpg" alt="Tashoora - Hitam">
    </div>

    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/bp8zq2X0t2s?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/bp8zq2X0t2s/0.jpg" alt="Tashoora - Hitam">
    </div>

    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/4G330XcXKeQ?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/4G330XcXKeQ/0.jpg" alt="Tashoora - Hitam">
    </div>

    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/ya7tDOER5aU?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/ya7tDOER5aU/0.jpg" alt="Tashoora - Hitam">
    </div>

    <div class="wihwdjnaef"
        onclick="openModal('https://www.youtube.com/embed/jBtS5z0Cb0Q?autoplay=1', 'Tashoora - Hitam')">
        <img style="border-radius: 10px;" src="https://img.youtube.com/vi/jBtS5z0Cb0Q/0.jpg" alt="Tashoora - Hitam">
    </div>
</div>    


    <script>
        // Open the modal and set video content
        function openModal(videoUrl, title) {
            document.getElementById('modalOverlay').style.display = 'flex';
            var iframe = document.querySelector('#modalOverlay iframe');
            iframe.src = videoUrl;
            iframe.title = title;
        }

        // Close the modal and pause the video
        function closeModal() {
            document.getElementById('modalOverlay').style.display = 'none';
            var iframe = document.querySelector('#modalOverlay iframe');
            iframe.src = '';
        }

    </script>
