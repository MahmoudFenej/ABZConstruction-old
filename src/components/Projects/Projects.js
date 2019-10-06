import React from 'react'
import { useTranslation } from 'react-i18next'

export default function useProjectsSection() {
    const { t } = useTranslation()
    return <div class="container">
    <h2 class="text-center text-info">{t("MOST_IMPORT")}</h2>

        <section class="col-xs-6  col-sm-6 col-md-4 col-lg-4 ">
            <h3>{t("SAIID_HALLAB")} </h3>

        </section>        
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("SAIIDSHA")} </h3>

        </section>        
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("SAIID_HALLAB")} </h3>

        </section>        
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("SPIRO")} </h3>

        </section>     
        <div class="clearfix"></div>
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("JAWDAT")} </h3>

        </section>        
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("OBEID")} </h3>

        </section>       
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("TUFIC")} </h3>

        </section>       
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("RADWAN")} </h3>

        </section>       
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3>{t("KARAMI")} </h3>

        </section>       
        <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
            <h3 class="text-success">{t("MANY_OTHERS")} </h3>

        </section>       

    </div>
 
}
