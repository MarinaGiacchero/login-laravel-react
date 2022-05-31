import React, { Fragment, useState} from 'react';
import Link from '@material-ui/core/Link'
import {withStyles} from '@material-ui/core/styles';
import {Container} from '@material-ui/core';
import Button from '@material-ui/core/Button'; 
import TextField from '@material-ui/core/TextField';
import Typography from '@material-ui/core/Typography';
import { purple } from '@material-ui/core/colors';
import { useNavigate } from 'react-router-dom';
import { inserirUsuario } from '../../../Service/UsuarioService';

const CollorButton= withStyles(theme => ({

        root:{
            color: '#ffffff',
            backgroundColor: purple[800],
            '&:hover' : {
                backgroundColor: purple[500]
            }
        }
}))(Button)

export default function Registrar() {
    const [nome, setNome]   = useState('');
    const [email, setEmail] = useState('');
    const [rg, setRG]   = useState('');
    const [cpf, setCPF]   = useState('');
    const [data_nasc, setData_nasc]   = useState('');
    const [estado_civil, setEstado_civil]   = useState('');
    const [nacionalidade, setNacionalidade]   = useState('');
    const [password, setPassword] = useState('');

    const navigate = useNavigate();
    async function handleLogin(e) {
     //   console.log(http.post('/register'));
      e.preventDefault();
      const dados = {
      "nome":nome,
      "email":email,
      "rg":rg,
      "cpf":cpf,
      "data_nasc":data_nasc,
      "estado_civil":estado_civil,
      "nacionalidade":nacionalidade,
      "password":password,
    };
     // console.log(dados);
     
        await inserirUsuario(dados)
        .then(async (res) =>{
           
                navigate("/login");
            
        });
        
      
    }
     
      
    
    
    return (

        <div style={{ border: '1px', backgroundColor: '#e8eaf6', padding: '1.5%', width: '100%', height: '100vh' }} >
       
        <Fragment >
            <div className='container' 

                style={{  display: "flex",
                flexDirection: "column",
                alignItems: "center" 
                  }}
                  sx={{ justifyContent: 'center', overflowX: 'auto'}} >
                    
            
    
            
           
            <Container component= "main" style={{ padding:'0px 15% '}}>
            <div style={{ borderRadius: '20px 20px 20px 20px', border: '1px solid grey', padding: '5px 50px 50px 50px', backgroundColor: 'white', alignContent:'center'}} >
                <div className='mt-3 mt-md-5' >
                    <div className='text-center'>  
                        <img src='buscaqui.png' alt='logo do buscaqui'/>
                        <Typography className='mt-3 font-weight-normal' component="h1" variant= "h6">
                            Seja nosso cliente e faça parte dos nossos dados.
                        </Typography>
                    </div>
        <form onSubmit={handleLogin}>
                <div className='mt-4'>
                        <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        fullWidth
                        id='nome'
                        label= "Nome"
                        name='nome'
                        type='nome'
                        value={nome}
                        onChange={e => setNome(e.target.value)}
                        
                        />
                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='email'
                        label= "E-mail"
                        name='username'
                        type='email'
                        value={email}
                        onChange={e => setEmail(e.target.value)}
                        />
                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='rg'
                        label= "RG"
                        name='RG'
                        type='nome'
                        value={rg}
                        onChange={e => setRG(e.target.value)}
                        /> 
                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='cpf'
                        label= "CPF"
                        name='cpf'
                        type='nome'
                        value={cpf}
                        onChange={e => setCPF(e.target.value)}
                        /> 
                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='estado_civil'
                        label= "Estado Civil"
                        name='estado_civil'
                        type='nome'
                        value={estado_civil}
                        onChange={e => setEstado_civil(e.target.value)}
                        /> 
                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='nacionalidade'
                        label= "Nacionalidade"
                        name='nacionalidade'
                        type='nome'
                        value={nacionalidade}
                        onChange={e => setNacionalidade(e.target.value)}
                        />

                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '20px 1px 1px 12%'}}
                        id='data'
                        label= "Data de Nascimento"
                        name='data'
                        type='date'
                        value={data_nasc}
                        onChange={e => setData_nasc(e.target.value)}
                        />

                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '30px 1px 1px 12%'}}
                        id='password'
                        label= "Senha"
                        name='password'
                        type='password'
                        value={password}
                        onChange={e => setPassword(e.target.value)}
                        />

                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        style={{padding: '1px 1px 1px 1px', margin: '30px 1px 1px 12%'}}
                        id='password'
                        label= "Confirme a Senha"
                        name='password'
                        type='password'
                        
                        />
                        
                        <Button 
                            type= 'submit'
                            variant='contained'
                            style={{padding: '10px 112px 10px 112px', margin: '20px 1px 1px 30%'}}
                            color='primary'
                            size= 'large'
                            className='mb-3 mb-md-4 mt-4'
                        >
                            Criar
                        </Button>
                       
                        <Link href='/login'>
                            <CollorButton
                                type='button'
                                style={{padding: '10px 40px 10px 50px', margin: '1px 1px 1px 30%'}}
                                size='large'
                                variant='contained'
                                className='mt-md-1'
                            >
                            Já possuo cadastro
                            </CollorButton>
                        </Link>

                 
            </div>
            </form>
            </div> 
            </div>
        </Container>
            </div>
   
        </Fragment>
        </div>
    )
}
