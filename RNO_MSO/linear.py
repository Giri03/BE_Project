import numpy as np 
# import matplotlib.pyplot as plt 

def estimate_coef(x, y): 
	# number of observations/points 
	n = np.size(x) 

	# mean of x and y vector 
	m_x, m_y = np.mean(x), np.mean(y) 

	# calculating cross-deviation and deviation about x 
	SS_xy = np.sum(y*x) - n*m_y*m_x 
	SS_xx = np.sum(x*x) - n*m_x*m_x 

	# calculating regression coefficients 
	b_1 = SS_xy / SS_xx 
	b_0 = m_y - b_1*m_x 

	return(b_0, b_1) 

def main(): 
    latitude = np.array([19.88, 18.9891, 19.72, 19.83, 18.4, 19.15, 18.17, 19.27])
    longitude = np.array([75.33, 75.7601, 77.15, 75.88, 76.58, 77.33, 76.05, 76.78])
	# estimating coefficients 
    b = estimate_coef(latitude, longitude)
    print(b[0])

if __name__ == "__main__": 
	main() 
