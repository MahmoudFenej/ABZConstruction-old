import React from 'react'
import { useTranslation } from 'react-i18next'
import 'bootstrap/dist/css/bootstrap.css';

export default function useServicesSection() {
    const { t } = useTranslation()
    return <div id="services" class="services container">
        <h2 class="text-center text-info">{t("COMPANY_WORK_FEILD")}</h2>
        <div class="row">
            <section class="col-sm-4 col-md-4 col-lg-4 ">
                <img class="icon fadeInDown" src="assets/images/ServicesImages/EngineerImage.png" alt="Icon" />
                <h3>{t("CONSTRUCTION_AND_ENG")}</h3>
            </section>

            <section class="col-sm-4 col-md-4 col-lg-4">
                <img class="icon" src="assets/images/ServicesImages/electrical.png" alt="Icon" />
                <h3>{t("INTERNAL_AND_EXTERNAL")}</h3>
            </section>

            <section class="col-sm-4 col-md-4 col-lg-4">
                <img class="icon" src="assets/images/ServicesImages/sanitary.png" alt="Icon" />
                <h3>{t("SANITARY")}</h3>

            </section>

            <section class="col-sm-4 col-md-4 col-lg-4">
                <img class="icon" src="assets/images/ServicesImages/heating.png" alt="Icon" />
                <h3>{t("HEATER")}</h3>
            </section>




            <section class="col-sm-4 col-md-4 col-lg-4">
                <img class="icon" src="assets/images/ServicesImages/PAINT.png" alt="Icon" />
                <h3>{t("PAINT")}</h3>
            </section>

            <section id="solar" class="col-sm-4 col-md-4 col-lg-4">
                <img class="icon" src="assets/images/ServicesImages/solar.png" alt="Icon" />
                <h3>{t("SOLAR")}</h3>
            </section>

        </div>


    </div>
}
