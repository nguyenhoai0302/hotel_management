<style>
    .container{
        margin-top: 50px;
    }
    CSS ảnh */
    .details_room {

        padding-left: 20px;
        padding-right: 20px;
    } 

    .picture {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-template-areas:
            "right right left-top1 left-top2 "
            "right right left-bottom1 left-bottom2 ";
        grid-row-gap: 20px;
        grid-column-gap: 20px;
    }

    #img1,
    #img2,
    #img3,
    #img4,
    #img5 {
        height: 100%;
        width: 100%;
        border-radius: 5px;
    }

    .img1 {
        grid-area: right;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .img2 {
        grid-area: left-top1;
    }

    .img3 {
        grid-area: left-top2;
        border-top-right-radius: 15px;
    }

    .img4 {
        grid-area: left-bottom1;
    }

    .img5 {
        grid-area: left-bottom2;
        border-bottom-right-radius: 15px;
    }

    .content-text {
        margin-top: 10px;
        justify-content: space-between;
        align-items: center;
    }

    .context__icon {
        text-align: end;
        align-items: center;
        /* padding: 0 px; */
        font-size: 36px;
        /* outline:none; */
    }

    #icon_share_detail {
        cursor: pointer;
        font-size: 36px !important;
    }

    #icon_heart_detail {
        cursor: pointer;
        padding-right: 20px;
        font-size: 36px;
    }

    #name_room_detail {
        font-family: 'Roboto';
        font-weight: bold;
        font-size: 32px;
        margin-bottom: 0;
    }

    #price_room_detail {
        font-family: 'Roboto';
        font-weight: bold;
        color: #ffe629;
        font-size: larger;
    }


    /* row 2 of row */
    .content-icon {
        text-align: center;

    }

    .icon__room {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        background-color: #FFE2E9;
    }

    .icon__room i {
        color: black !important;
    }

    .content-description {
        margin-top: 50px;
    }

    .content-review {
        margin-top: 50px;
    }

    .avata__review {
        width: 50px;
        height: 50px;
        border-radius: 999px;
    }

    .content_comment-detail {
        margin-top: 20px;
    }

    /* hieuj ứng button */
    .button_booking {
        position: fixed;
        padding: 0.6em 0.9em;
        font-size: 17px;
        border: 5px solid;
        border-radius: 10px;
        margin: 20px 50px;
        color: #080808;
        font-weight: bolder;
    }


    .button_booking:hover {
        border-radius: 10px;
        background-color: yellow;

    }

    /* cmt customer */
    .comment-cus {
        border-radius: 12px;
        margin: 12px;
        padding-top: 12px;
        box-shadow: 1px 5px 4px rgb(243, 229, 35);
    }

    #avata {
        display: none;
        margin-right: 40px;
    }

    .col-md-6.col-lg-4 {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .section-title.text-white.text-uppercase.mb-4 {
        width: 268px;
        height: 48px;
        color: #ffef3f !important;
        font-size: xx-large;
    }

    #favorite-icon {
        user-select: none;
        position: relative;
        right: 40px;
        cursor: pointer;
        color: #ff0022;
    }

    #addbag {
        position: relative;
        top: -30px;
        left: 40px;
        font-size: 48px !important;
        color: #d4ce1e;
        cursor: pointer;
    }
</style>