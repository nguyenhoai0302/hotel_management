<style>
    .body--content {
        margin-left: 100px;
        margin-right: 100px;

    }

    .content__text {
        margin: 0;
        margin-top: 50px;
        margin-bottom: 50px;

    }

    /* Tieu de */
    .title {
        margin-top: 100px;
        text-align: center;
    }

    .title-booking-room {
        font-size: 36px;
        font-weight: 900;
        letter-spacing: 2px;
        background: yellow;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 300% 300%;
        animation: gradient_Booking 8s ease-in-out infinite;
    }

    @keyframes gradient_Booking {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 2% 50%;
        }
    }

    /* edit body */
    .left-content {
        margin: 0;
        padding: 0;
    }

    .input--group {
        margin: 15px 0px;
    }

    .label {
        display: block;
        font-weight: 500;
        font-size: 20px;
        /* margin: 10px 0px; */
    }

    .name-booking {
        margin: 0 12px;
        width: 96.4%;
        padding: 10px 12px;
    }

    .input__check-date {
        width: 100%;
        padding: 10px 0px;
    }

    .input-request {
        border-radius: 12px;
        margin: 0 12px;
        width: 96.4%;
        height: 100px;
        padding: 0 15px;
    }

    /* EDIT PAYMENT BY */
    .payment {
        margin: 0 12px;
        padding: 0;
    }

    .title-small {
        font-size: 28px;
        font-weight: 500;
    }

    .select-option {
        padding: 10px 12px;
        width: 100%;
        margin-bottom: 15px;
    }

    /* edit phần mã thẻ & CVV */
    .form-number--card {
        border: 0.7px solid rgb(112, 111, 111);
        height: auto;
        margin-bottom: 15px;
    }

    .form-number--card>hr {
        margin: 0;
        color: 0.6 solid;
    }

    .input-number-card {
        margin: 0;
        width: 100%;
        border: none;
        padding: 10px 12px;
    }

    .div-expiration {
        padding-right: 0;
        border-right: 0.7px solid gray;
    }

    .div-CVV {
        padding-left: 0;
    }

    .general-standard {
        margin: 0 12px;
        margin-bottom: 25px;
    }

    .div-postal {
        border: 1px solid black;
        margin-bottom: 15px;
    }

    /* edit button */
    .button {
        margin: 12px;
        width: 95.4%;
        position: relative;
        padding: 10px 20px;
        border-radius: 7px;
        border: 1px solid #fffc3f;

        font-size: 14px;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 2px;
        background: transparent;
        color: #000000;
        overflow: hidden;
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        background: #fffc3f;
    }

    .button:hover {
        background: #fee905;
        box-shadow: 0 0 30px 5px #fffc3f;

        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    .button:hover::before {
        -webkit-animation: sh02 0.5s 0s linear;
        -moz-animation: sh02 0.5s 0s linear;
        animation: sh02 0.5s 0s linear;
    }

    .button::before {
        content: '';
        display: block;
        width: 0px;
        height: 86%;
        position: absolute;
        top: 7%;
        left: 0%;
        opacity: 0;
        background: #fffc3f;
        box-shadow: 0 0 50px 30px #fffc3fff;
        -webkit-transform: skewX(-20deg);
        -moz-transform: skewX(-20deg);
        -ms-transform: skewX(-20deg);
        -o-transform: skewX(-20deg);
        transform: skewX(-20deg);
    }

    @keyframes sh02 {
        from {
            opacity: 0;
            left: 0%;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
            left: 100%;
        }
    }

    .button:active {
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: box-shadow 0.2s ease-in;
        -moz-transition: box-shadow 0.2s ease-in;
        transition: box-shadow 0.2s ease-in;
    }

    /* RIGHT CONTENT */
    .div-right {
        height: auto !important;
        border: 1px solid #000000;
        border-radius: 20px;
        padding: 20px;
    }

    .img--infor {
        height: 172px;
        border-radius: 15px;
    }

    .price {
        font-size: 24px;
        font-weight: bold;
        color: #fee905;
        letter-spacing: 2px;
    }

    /* css cho input// ô input date */
    .insecon {
        width: 100%;
        height: 56px;
        font-size: large;
        padding-left: 50px;
    }

    #hinh {
        width: 100%;
        height: 40%;
    }
</style>