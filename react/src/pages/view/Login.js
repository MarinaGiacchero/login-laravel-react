import React, { Component, Fragment } from 'react'
import { connect } from 'react-redux'
import Link from '@material-ui/core/Link'
import {withStyles} from '@material-ui/core/styles';
import {Container} from '@material-ui/core';
import Button from '@material-ui/core/Button'; 
import TextField from '@material-ui/core/TextField';
import Typography from '@material-ui/core/Typography';
import {changeValue, logando} from '../../Action/auth.action';
import { purple } from '@material-ui/core/colors';

const CollorButton= withStyles(theme => ({

  root:{
      color: '#ffffff',
      backgroundColor: purple[800],
      '&:hover' : {
          backgroundColor: purple[500]
      }
  }
}))(Button)

export class Login extends Component {


 
  login= () => {
   logando(this.credentials)
    .then(()=> {

    }) 
  }


 
  render() {
   
    return (
    
      
        <div style={{ border: '1px', padding: '7%', backgroundColor: '#e8eaf6' }} >
       
        <Fragment >
            <div className='container' style={{  display: "flex",
                flexDirection: "column",
                alignItems: "center"
                  }}
                  sx={{ justifyContent: 'center', overflowX: 'auto'}} >
                     
            <Container component= "main" maxWidth="xs" >
            <div style={{ borderRadius: '20px 20px 20px 20px', border: '1px solid grey', padding: '5px 50px 50px 50px', backgroundColor: 'white', alignContent:'center'}} >
                <div className='mt-3 mt-md-5' >
                    <div className='text-center'>  
                       
                        <img src='buscaqui.png' alt='logo buscaqui'/>
                        <Typography className='mt-3 font-weight-normal' component="h1" variant= "h6">
                            As suas vendas com os nossos dados
                        </Typography>
                    </div>
                <div className='mt-4'>
                        <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        fullWidth
                        id='email'
                        label= "E-mail"
                        name='username'
                        type='email'         
                     
                        onChange = {e => this.setState({ [e.target.name]: e.target.value })}
                        />

                         <TextField
                        variant='outlined'
                        margin='normal'
                        required
                        fullWidth
                        id='password'
                        label= "Senha"
                        name='password'
                        type='password'
                        
                        onChange = {e => this.setState({ [e.target.name]: e.target.value })}
                        />
                        
                        <Button 
                            type= 'button'
                            variant='contained'
                            fullWidth
                            color='primary'
                            size= 'large'
                            className='mb-3 mb-md-4 mt-4'
                            onClick={() => this.login()}
                        >
                            Entrar
                        </Button>
                        
                        <Link href='/register'>
                            <CollorButton
                                type='button'
                                fullWidth
                                size='large'
                                variant='contained'
                                className='mt-md-1'
                            >
                            Cadastrar
                            </CollorButton>
                        </Link>
                </div>

                </div>  
                </div>
            </Container>
            </div>
          
        
           
       
        </Fragment>
        </div>
    )
    
  }
}


const mapStateToProps = (state)=> ({
  credentials: state.authReducer.credentials,
})

const mapDispatchToProps= dispatch => ({
  logando: (credentials) => dispatch(logando(credentials)) ,
  changeValue: (value) => dispatch(changeValue(value))
  
  })


export default connect(mapStateToProps, mapDispatchToProps)(Login)