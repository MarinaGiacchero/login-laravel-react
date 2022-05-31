import React, { Fragment, Suspense} from "react";
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Dashboard from './pages/Dashboard/Dashboard';
import ListarEditora from "./pages/editora/ListarEditora";
import IncluirEditora from "./pages/editora/IncluirEditora";
import AlterarEditora from "./pages/editora/AlterarEditora";
import IncluirUsuario from './pages/usuario/IncluirUsuario'; 
import Logar from "./pages/view/Logar.js";
import './css/dashboard.css'
import ProgressBar from "./components/circularProgress/ProgressBar";
import Registrar from "./pages/view/registro/Registrar"

function App() {
  return (
    <Fragment>
       
      <BrowserRouter>
       
    
      <Suspense fallback={<div className= "mt-5 pt-5 "><ProgressBar/></div>}>
          <Routes>
               <Route path="/login" element={<Logar/>}/> 
               <Route path="/" element={<Logar/>}/> 
               <Route path="/register" element={<Registrar/>}/> 
              <Route path="/dashboard" element={<Dashboard/>}/>
              <Route path="/editora/listar" element={<ListarEditora/>}/>
              <Route path="/editora/inserir" exact element={<IncluirEditora/>}/>
              <Route path="/editora/alterar/:id" exact element={<AlterarEditora/>}/>
              <Route path="/usuario/inserir" exact element={<IncluirUsuario/>}/> 
          </Routes>
          </Suspense>
      </BrowserRouter>     

    </Fragment>
  );
}

export default App;
