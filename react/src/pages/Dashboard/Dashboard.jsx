
import React, { Fragment } from "react";
import PageHeaders from "../../components/header/PageHeaders";
import Layout from "../../components/layout/Layout";
const Dashboard = () => {
    return (
        <Layout>
        <Fragment>
            <PageHeaders 
               tituloPagina="Página Principal"
               path="#"
               tituloPesquisa=""
               icon="tachometer"
               toReturn=""
            />
        </Fragment>
        </Layout>
    )
}

export default Dashboard;